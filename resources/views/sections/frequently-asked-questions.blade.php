<!-- FAQ SECTION START -->
<div class="ul-faq ul-section-spacing px-3">
    @include('sections.section-header', [
        'title' => 'Frequently Asked Questions',
        'subtitle' => 'Common questions about our real estate services'
    ])

    <div class="ul-faq-wrapper" x-data="{ activeQuestion: null }">
        <!-- Question 1 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 0 }"
             @click="activeQuestion = activeQuestion === 0 ? null : 0">
            <div class="ul-faq-question">
                <h3>How do I start the property buying process with Brillian & Co?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 0 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 0" x-transition>
                <p>Starting your property journey with us is simple:</p>
                <ul>
                    <li>Browse our extensive property listings</li>
                    <li>Schedule a consultation with our expert agents</li>
                    <li>Get personalized property recommendations</li>
                    <li>Receive guidance through financing options</li>
                    <li>Tour selected properties with our agents</li>
                </ul>
                <p>Our team will support you every step of the way to find your perfect property.</p>
            </div>
        </div>

        <!-- Question 2 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 1 }"
             @click="activeQuestion = activeQuestion === 1 ? null : 1">
            <div class="ul-faq-question">
                <h3>What documents do I need to rent a property?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 1 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 1" x-transition>
                <p>Required documents typically include:</p>
                <ul>
                    <li>Valid identification (National ID or passport)</li>
                    <li>Proof of income (Pay slips or bank statements)</li>
                    <li>Employment verification letter</li>
                    <li>Previous rental references</li>
                    <li>Security deposit</li>
                </ul>
            </div>
        </div>

        <!-- Question 3 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 2 }"
             @click="activeQuestion = activeQuestion === 2 ? null : 2">
            <div class="ul-faq-question">
                <h3>Do you offer property management services?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 2 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 2" x-transition>
                <p>Yes, we offer comprehensive property management services including:</p>
                <ul>
                    <li>Tenant screening and placement</li>
                    <li>Rent collection and financial reporting</li>
                    <li>Property maintenance and repairs</li>
                    <li>Regular property inspections</li>
                    <li>24/7 emergency response</li>
                </ul>
            </div>
        </div>

        <!-- Question 4 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 3 }"
             @click="activeQuestion = activeQuestion === 3 ? null : 3">
            <div class="ul-faq-question">
                <h3>What areas do you cover in Cameroon?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 3 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 3" x-transition>
                <p>We operate in major cities and regions across Cameroon, including:</p>
                <ul>
                    <li>Douala - Commercial capital</li>
                    <li>Yaoundé - Administrative capital</li>
                    <li>Kribi - Beach resort city</li>
                    <li>Limbe - Coastal city</li>
                    <li>And surrounding areas</li>
                </ul>
            </div>
        </div>

        <!-- Question 5 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 4 }"
             @click="activeQuestion = activeQuestion === 4 ? null : 4">
            <div class="ul-faq-question">
                <h3>How can I list my property with Brillian & Co?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 4 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 4" x-transition>
                <p>Listing your property with us is easy:</p>
                <ul>
                    <li>Contact our listing team</li>
                    <li>Schedule a property evaluation</li>
                    <li>Receive a market analysis and pricing strategy</li>
                    <li>Professional photography and listing creation</li>
                    <li>Marketing across our platforms</li>
                </ul>
                <p>We'll handle everything to ensure your property gets maximum exposure to qualified buyers or tenants.</p>
            </div>
        </div>

        <!-- Question 6 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 5 }"
             @click="activeQuestion = activeQuestion === 5 ? null : 5">
            <div class="ul-faq-question">
                <h3>What financing options are available for property purchases?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 5 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 5" x-transition>
                <p>We work with various financing options to suit your needs:</p>
                <ul>
                    <li>Traditional bank mortgages with competitive rates</li>
                    <li>Flexible payment plans for new developments</li>
                    <li>Investment financing packages</li>
                    <li>Partnership with major banks in Cameroon</li>
                    <li>Guidance on mortgage pre-approval process</li>
                </ul>
                <p>Our financial advisors can help you choose the best option for your situation.</p>
            </div>
        </div>

        <!-- Question 7 -->
        <div class="ul-faq-item wow animate__fadeInUp" 
             :class="{ 'active': activeQuestion === 6 }"
             @click="activeQuestion = activeQuestion === 6 ? null : 6">
            <div class="ul-faq-question">
                <h3>What makes a property a good investment in Cameroon?</h3>
                <span class="ul-faq-icon" :class="{ 'rotated': activeQuestion === 6 }">
                    <i class="fas fa-chevron-down"></i>
                </span>
            </div>
            <div class="ul-faq-answer" x-show="activeQuestion === 6" x-transition>
                <p>Key factors that make a property a good investment include:</p>
                <ul>
                    <li>Location in growing neighborhoods or business districts</li>
                    <li>Proximity to essential amenities and infrastructure</li>
                    <li>Strong rental demand in the area</li>
                    <li>Property appreciation potential</li>
                    <li>Quality of construction and maintenance</li>
                </ul>
                <p>Our experts can help you identify properties with the best investment potential based on your goals.</p>
            </div>
        </div>
    </div>
</div>

<style>
.ul-faq {
    max-width: 900px;
    margin: 0 auto;
}

.ul-faq-item {
    background: white;
    border-radius: 12px;
    margin-bottom: 16px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.ul-faq-item:hover {
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
}

.ul-faq-question {
    padding: 20px;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.ul-faq-question h3 {
    margin: 0;
    font-size: 18px;
    color: var(--ul-heading);
    transition: color 0.3s ease;
}

.ul-faq-icon {
    transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1);
}

.ul-faq-icon.rotated {
    transform: rotate(180deg);
}

.ul-faq-answer {
    padding: 0 20px 20px;
    color: var(--ul-text);
}

.ul-faq-answer ul {
    list-style-type: none;
    padding-left: 20px;
}

.ul-faq-answer ul li {
    margin-bottom: 8px;
    position: relative;
    transition: all 0.3s ease;
    transition-delay: calc(var(--li-index, 0) * 0.1s);
}

.ul-faq-answer ul li:before {
    content: "•";
    color: var(--ul-primary);
    font-weight: bold;
    position: absolute;
    left: -15px;
}

.ul-faq-item.active {
    border-left: 4px solid var(--ul-primary);
}

.ul-faq-item.active .ul-faq-question h3 {
    color: var(--ul-primary);
}

/* Animation classes */
.ul-faq-item {
    animation-duration: 0.5s;
    animation-fill-mode: both;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translate3d(0, 20px, 0);
    }
    to {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}
</style>

<script>
document.addEventListener('alpine:init', () => {
    Alpine.data('counterAnimation', (endValue, suffix = '') => ({
        displayValue: '0' + suffix,
        startValue: 0,
        endValue: endValue,
        suffix: suffix,
        
        init() {
            // Add index to list items for staggered animation
            this.$nextTick(() => {
                this.$el.querySelectorAll('.ul-faq-answer ul li').forEach((li, index) => {
                    li.style.setProperty('--li-index', index);
                });
            });
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        this.animateCounter();
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 });
            
            observer.observe(this.$el);
        }
    }));
});
</script>
<!-- FAQ SECTION END -->
