var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    "/offline",
    // CSS files - using correct paths
    "/assets/css/style.css",
    "/assets/css/form.css",
    "/assets/css/floating-whatsapp.css",
    "/assets/css/flaticon_real_estate.css",
    "/assets/css/slimselect.css",
    "/assets/css/animate.min.css",
    
    // JS files
    "/assets/js/main.js",
    "/assets/js/tab.js",
    "/assets/js/wow.min.js",
    "/assets/js/index.min.js",
    "/assets/js/mixitup.min.js",
    
    // Vendor files
    "/assets/vendor/bootstrap/css/bootstrap.min.css",
    "/assets/vendor/bootstrap/js/bootstrap.bundle.min.js",
    "/assets/vendor/splide/css/splide.min.css",
    "/assets/vendor/splide/js/splide.min.js",
    "/assets/vendor/splide/js/splide-extension-auto-scroll.min.js",
    "/assets/vendor/swiper/swiper-bundle.min.css",
    "/assets/vendor/swiper/swiper-bundle.min.js",
    "/assets/vendor/slimselect/slimselect.min.css",
    
    // Images
    "/assets/img/brillian/company_logo_circle.png",
    "/assets/img/brillian/brown_building_projects.jpg",
    "/assets/img/brillian/brown_building_1.jpg",
    "/assets/img/brillian/IMG-20250503-WA0130.jpg",
    "/assets/img/brillian/white_apart_brown_door.jpg",
    
    // Icons
    "/images/icons/icon-72x72.png",
    "/images/icons/icon-96x96.png",
    "/images/icons/icon-128x128.png",
    "/images/icons/icon-144x144.png",
    "/images/icons/icon-152x152.png",
    "/images/icons/icon-192x192.png",
    "/images/icons/icon-384x384.png",
    "/images/icons/icon-512x512.png",
];

// Cache on install with better error handling
self.addEventListener("install", (event) => {
    console.log('[ServiceWorker] Install');
    self.skipWaiting();
    
    event.waitUntil(
        caches.open(staticCacheName).then((cache) => {
            console.log('[ServiceWorker] Caching app shell');
            
            // Try to cache files individually to handle failures
            return Promise.all(
                filesToCache.map(url => {
                    return cache.add(url).catch(error => {
                        console.warn(`[ServiceWorker] Failed to cache ${url}:`, error);
                        // Continue even if individual files fail
                        return Promise.resolve();
                    });
                })
            );
        }).catch(error => {
            console.error('[ServiceWorker] Install failed:', error);
        })
    );
});

// Clear old cache on activate
self.addEventListener("activate", (event) => {
    console.log('[ServiceWorker] Activate');
    event.waitUntil(
        caches.keys().then((cacheNames) => {
            return Promise.all(
                cacheNames
                    .filter((cacheName) => cacheName.startsWith("pwa-"))
                    .filter((cacheName) => cacheName !== staticCacheName)
                    .map((cacheName) => {
                        console.log('[ServiceWorker] Removing old cache:', cacheName);
                        return caches.delete(cacheName);
                    })
            );
        })
    );
    // Claim clients immediately
    return self.clients.claim();
});

// Serve from Cache with network fallback
self.addEventListener("fetch", (event) => {
    // Skip non-GET requests
    if (event.request.method !== 'GET') {
        return;
    }
    
    // Skip cross-origin requests
    if (!event.request.url.startsWith(self.location.origin)) {
        return;
    }
    
    event.respondWith(
        caches.match(event.request).then((response) => {
            if (response) {
                console.log('[ServiceWorker] Found in cache:', event.request.url);
                return response;
            }
            
            // Clone the request because it's a stream
            const fetchRequest = event.request.clone();
            
            return fetch(fetchRequest).then((response) => {
                // Check if we received a valid response
                if (!response || response.status !== 200 || response.type !== 'basic') {
                    return response;
                }
                
                // Clone the response because it's a stream
                const responseToCache = response.clone();
                
                caches.open(staticCacheName).then((cache) => {
                    cache.put(event.request, responseToCache);
                });
                
                return response;
            }).catch(() => {
                // If both cache and network fail, show offline page
                if (event.request.destination === 'document') {
                    return caches.match('/offline');
                }
            });
        })
    );
});