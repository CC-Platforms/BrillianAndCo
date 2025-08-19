@extends('layout.main')

@section('content')

<main>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Gallery</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Gallery</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <!-- Gallery Grid -->
        <div class="gallery-grid" id="galleryGrid">

            <div class="gallery-item">
                <img src="{{ asset('assets/img/gallery/logo_update.jpg') }}" alt="brillian and co group ltd logo" loading="lazy">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h3>Company Logo</h3>
                        <p>The official Brillian &amp; Co Group Ltd brand identity</p>
                    </div>
                </div>
            </div>

            <!-- Sample Images - Replace with your actual images -->
            <div class="gallery-item">
                <img src="{{ asset('assets/img/gallery/mockup_cup.jpg') }}" alt="mockup cup" loading="lazy">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h3>Custom Branded Cup</h3>
                        <p>Promotional mockup showcasing a stylish company cup design</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/gallery/mockup_phone.jpg') }}" alt="mockup phone" loading="lazy">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h3>Mobile Mockup</h3>
                        <p>A clean branded phone concept highlighting mobile engagement</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item">
                <img src="{{ asset('assets/img/gallery/mockup_shirt.jpg') }}" alt="mockup shirt" loading="lazy">
                <div class="gallery-overlay">
                    <div class="overlay-content">
                        <h3>Custom Apparel</h3>
                        <p>Mockup shirt design featuring company branding for merchandise</p>
                    </div>
                </div>
            </div>
           
            <!-- Add more gallery items as needed -->
        </div>
    </div>
</main>


<style>
    /* Gallery Styles */
    .ul-inner-page-content-wrapper {
        padding: 60px 0;
        max-width: 1200px;
        margin: 0 auto;
        padding-left: 20px;
        padding-right: 20px;
    }

    /* Gallery Grid */
    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 40px;
    }

    .gallery-item {
        position: relative;
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s ease;
        background: #f8f9fa;
        aspect-ratio: auto;
    }

    .gallery-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(48, 88, 175, 0.15);
    }

    .gallery-item img {
        width: fit-content;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.05);
    }

    .gallery-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(transparent, rgba(0,0,0,0.8));
        color: white;
        padding: 30px 20px 20px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    .overlay-content h3 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 5px;
    }

    .overlay-content p {
        font-size: 14px;
        opacity: 0.9;
        line-height: 1.4;
    }

    /* Load More Button */
    .load-more-container {
        text-align: center;
    }

    .load-more-btn {
        padding: 15px 40px;
        background: linear-gradient(135deg, #3058af, #4a6bc7);
        color: white;
        border: none;
        border-radius: 50px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .load-more-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 30px rgba(48, 88, 175, 0.3);
    }

    /* Modal Styles */
    .image-modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
        background: rgba(0,0,0,0.9);
    }

    .modal-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        border-radius: 20px;
        max-width: 90vw;
        max-height: 90vh;
        overflow: hidden;
        display: flex;
    }

    .modal-content img {
        width: 70%;
        height: auto;
        object-fit: cover;
    }

    .modal-info {
        width: 30%;
        padding: 30px;
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
    }

    .modal-info h3 {
        font-size: 24px;
        color: #2c3e50;
        margin-bottom: 10px;
    }

    .modal-info p {
        color: #666;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .modal-details {
        margin-top: auto;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 8px;
        font-size: 14px;
    }

    .detail-label {
        color: #666;
        font-weight: 500;
    }

    .modal-close {
        position: absolute;
        top: 20px;
        right: 20px;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        font-size: 24px;
        cursor: pointer;
        z-index: 1001;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .modal-close:hover {
        background: white;
        transform: scale(1.1);
    }

    .modal-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.9);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        font-size: 18px;
        cursor: pointer;
        opacity: 0.7;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .modal-nav:hover {
        opacity: 1;
        background: white;
        transform: translateY(-50%) scale(1.1);
    }

    .modal-nav.prev {
        left: 20px;
    }

    .modal-nav.next {
        right: 20px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .gallery-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 15px;
        }
        
        .modal-content {
            flex-direction: column;
            max-width: 95vw;
            max-height: 95vh;
        }
        
        .modal-content img {
            width: 100%;
            height: 60%;
            object-fit: contain;
        }
        
        .modal-info {
            width: 100%;
            height: 40%;
            padding: 20px;
        }
        
        .modal-nav {
            width: 40px;
            height: 40px;
            font-size: 16px;
        }
        
        .modal-nav.prev {
            left: 10px;
        }
        
        .modal-nav.next {
            right: 10px;
        }
    }

    @media (max-width: 480px) {
        .gallery-grid {
            grid-template-columns: 1fr;
        }
        
        .ul-inner-page-content-wrapper {
            padding-left: 15px;
            padding-right: 15px;
        }
    }

    /* Smooth animations */
    .gallery-item {
        animation: fadeInUp 0.6s ease forwards;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<script>
// Gallery functionality
document.addEventListener('DOMContentLoaded', function() {
    const galleryItems = document.querySelectorAll('.gallery-item');
    const modal = document.getElementById('imageModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const modalViews = document.getElementById('modalViews');
    let currentModalIndex = 0;

    // Modal functionality
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', () => {
            currentModalIndex = index;
            openModal(item);
        });
    });

    function openModal(item) {
        const fullImageSrc = item.getAttribute('data-image');
        const title = item.querySelector('h3').textContent;
        const description = item.querySelector('p').textContent;

        modalImage.src = fullImageSrc;
        modalTitle.textContent = title;
        modalDescription.textContent = description;
        modalViews.textContent = Math.floor(Math.random() * 5000) + 100; // Random view count for demo

        modal.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    // Load more functionality
    document.getElementById('loadMoreBtn').addEventListener('click', function() {
        // In a real implementation, you would fetch more images from your backend
        alert('Load more functionality - add your backend integration here');
    });
});

// Modal functions (global scope for onclick attributes)
function closeModal() {
    const modal = document.getElementById('imageModal');
    modal.style.display = 'none';
    document.body.style.overflow = 'auto';
}

function navigateModal(direction) {
    const galleryItems = document.querySelectorAll('.gallery-item');
    currentModalIndex += direction;
    
    if (currentModalIndex >= galleryItems.length) {
        currentModalIndex = 0;
    } else if (currentModalIndex < 0) {
        currentModalIndex = galleryItems.length - 1;
    }
    
    const nextItem = galleryItems[currentModalIndex];
    openModal(nextItem);
}

// Close modal with escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeModal();
    } else if (e.key === 'ArrowLeft') {
        navigateModal(-1);
    } else if (e.key === 'ArrowRight') {
        navigateModal(1);
    }
});
</script>

@endsection