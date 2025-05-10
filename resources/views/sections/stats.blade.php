<!-- STATS SECTION START -->
<div class="ul-stats ul-section-spacing">
    
    @include('sections.section-header', [
        'title' => 'Our Achievements',
        'subtitle' => 'Numbers that demonstrate our commitment to excellence'
    ])
    
    <div class="ul-stats-wrapper">
        <div class="ul-stats-item" 
             x-data="{ 
                 startValue: 0,
                 endValue: 9239,
                 currentValue: 0,
                 suffix: '+',
                 init() {
                     this.observeIntersection();
                 },
                 observeIntersection() {
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             this.animateValue();
                             observer.unobserve(entries[0].target);
                         }
                     }, { threshold: 0.5 });
                     observer.observe(this.$el);
                 },
                 animateValue() {
                     const duration = 2000;
                     const steps = 60;
                     const increment = this.endValue / steps;
                     const stepTime = duration / steps;
                     
                     const timer = setInterval(() => {
                         this.currentValue = Math.min(this.currentValue + increment, this.endValue);
                         if (this.currentValue >= this.endValue) {
                             clearInterval(timer);
                         }
                     }, stepTime);
                 }
             }">
            <i class="flaticon-user-1"></i>
            <span class="number" x-text="Math.round(currentValue) + suffix">0+</span>
            <span class="txt">Satisfied Clients</span>
        </div>
        
        <div class="ul-stats-item" 
             x-data="{ 
                 startValue: 0,
                 endValue: 600,
                 currentValue: 0,
                 suffix: '+',
                 init() {
                     this.observeIntersection();
                 },
                 observeIntersection() {
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             this.animateValue();
                             observer.unobserve(entries[0].target);
                         }
                     }, { threshold: 0.5 });
                     observer.observe(this.$el);
                 },
                 animateValue() {
                     const duration = 2000;
                     const steps = 60;
                     const increment = this.endValue / steps;
                     const stepTime = duration / steps;
                     
                     const timer = setInterval(() => {
                         this.currentValue = Math.min(this.currentValue + increment, this.endValue);
                         if (this.currentValue >= this.endValue) {
                             clearInterval(timer);
                         }
                     }, stepTime);
                 }
             }">
            <i class="flaticon-interior-design"></i>
            <span class="number" x-text="Math.round(currentValue) + suffix">0+</span>
            <span class="txt">Projects Completed</span>
        </div>
        
        <div class="ul-stats-item" 
             x-data="{ 
                 startValue: 0,
                 endValue: 4900,
                 currentValue: 0,
                 suffix: '+',
                 init() {
                     this.observeIntersection();
                 },
                 observeIntersection() {
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             this.animateValue();
                             observer.unobserve(entries[0].target);
                         }
                     }, { threshold: 0.5 });
                     observer.observe(this.$el);
                 },
                 animateValue() {
                     const duration = 2000;
                     const steps = 60;
                     const increment = this.endValue / steps;
                     const stepTime = duration / steps;
                     
                     const timer = setInterval(() => {
                         this.currentValue = Math.min(this.currentValue + increment, this.endValue);
                         if (this.currentValue >= this.endValue) {
                             clearInterval(timer);
                         }
                     }, stepTime);
                 }
             }">
            <i class="flaticon-buildings"></i>
            <span class="number" x-text="Math.round(currentValue) + suffix">0+</span>
            <span class="txt">Apartments Rented</span>
        </div>
        
        <div class="ul-stats-item" 
             x-data="{ 
                 startValue: 0,
                 endValue: 217,
                 currentValue: 0,
                 suffix: '+',
                 init() {
                     this.observeIntersection();
                 },
                 observeIntersection() {
                     const observer = new IntersectionObserver((entries) => {
                         if (entries[0].isIntersecting) {
                             this.animateValue();
                             observer.unobserve(entries[0].target);
                         }
                     }, { threshold: 0.5 });
                     observer.observe(this.$el);
                 },
                 animateValue() {
                     const duration = 2000;
                     const steps = 60;
                     const increment = this.endValue / steps;
                     const stepTime = duration / steps;
                     
                     const timer = setInterval(() => {
                         this.currentValue = Math.min(this.currentValue + increment, this.endValue);
                         if (this.currentValue >= this.endValue) {
                             clearInterval(timer);
                         }
                     }, stepTime);
                 }
             }">
            <i class="flaticon-map"></i>
            <span class="number" x-text="Math.round(currentValue) + suffix">0+</span>
            <span class="txt">Lands Sold</span>
        </div>
    </div>
</div>
<!-- STATS SECTION END -->