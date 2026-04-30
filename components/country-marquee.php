<!-- Fixed Bottom Country Marquee Slider -->
<div class="country-marquee-fixed">
    <div class="marquee-container">
        <div class="marquee-track">
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Russia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Georgia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Belarus</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Bulgaria</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Romania</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Poland</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Kyrgyzstan</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Kazakhstan</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Bangladesh</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Armenia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Serbia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Europe</span>
            <!-- Duplicate for seamless loop -->
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Russia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Georgia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Belarus</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Bulgaria</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Romania</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Poland</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Kyrgyzstan</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Kazakhstan</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Bangladesh</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Armenia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Serbia</span>
            <span class="marquee-item"><i class="fas fa-graduation-cap"></i> MBBS in Europe</span>
        </div>
    </div>
</div>

<style>
/* Fixed Bottom Country Marquee */
.country-marquee-fixed {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background: linear-gradient(90deg, #0a1628 0%, #1e3a5f 50%, #0a1628 100%);
    padding: 12px 0;
    z-index: 9998;
    border-top: 2px solid var(--primary-blue);
    box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.3);
}

.marquee-container {
    overflow: hidden;
    white-space: nowrap;
    width: 100%;
}

.marquee-track {
    display: inline-flex;
    animation: marquee-scroll 25s linear infinite;
}

.marquee-item {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 0 40px;
    font-size: 14px;
    font-weight: 600;
    color: #ffffff;
    white-space: nowrap;
}

.marquee-item i {
    color: var(--primary-blue);
    font-size: 12px;
}

@keyframes marquee-scroll {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Pause on hover */
.marquee-container:hover .marquee-track {
    animation-play-state: paused;
}

/* Mobile adjustments */
@media (max-width: 768px) {
    .country-marquee-fixed {
        padding: 10px 0;
    }
    
    .marquee-item {
        font-size: 13px;
        padding: 0 25px;
    }
    
    .marquee-track {
        animation: marquee-scroll 20s linear infinite;
    }
}

/* Add padding to body to prevent content from being hidden behind marquee */
body {
    padding-bottom: 50px;
}

@media (max-width: 768px) {
    body {
        padding-bottom: 45px;
    }
}
</style>
