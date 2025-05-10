document.addEventListener('DOMContentLoaded', function() {
    // Initialize Alpine component when Alpine is ready
    document.addEventListener('alpine:init', () => {
        Alpine.data('counterAnimation', (target, suffix = '') => ({
            count: 0,
            displayValue: '0' + suffix,
            hasAnimated: false,
            
            init() {
                console.log('Counter initialized with target:', target);
                
                // Set up intersection observer
                const observer = new IntersectionObserver(
                    (entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting && !this.hasAnimated) {
                                console.log('Starting animation...');
                                this.hasAnimated = true;
                                this.animate(target, suffix);
                            }
                        });
                    },
                    {
                        threshold: 0.1,
                        rootMargin: '50px'
                    }
                );
                
                observer.observe(this.$el);
            },
            
            animate(endValue, suffix) {
                const duration = 2000;
                const startTime = Date.now();
                
                const updateCount = () => {
                    const elapsed = Date.now() - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    
                    // Easing function
                    const easeProgress = 1 - Math.pow(1 - progress, 4);
                    
                    // Calculate current value
                    this.count = Math.floor(endValue * easeProgress);
                    this.displayValue = this.count.toLocaleString() + suffix;
                    
                    if (progress < 1) {
                        requestAnimationFrame(updateCount);
                    } else {
                        // Ensure final value is exact
                        this.count = endValue;
                        this.displayValue = endValue.toLocaleString() + suffix;
                    }
                };
                
                requestAnimationFrame(updateCount);
            }
        }));
    });
});
