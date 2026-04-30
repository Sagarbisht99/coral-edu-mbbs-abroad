<section class="intellectual-hero">
    <div class="container">
        <!-- Left Content -->
        <div class="hero-content-left">
            <h1 class="main-title">
                Most Trusted MBBS Abroad <br>
                Consultants in India
            </h1>

            <div class="cta-group">
                <button class="btn btn-white" onclick="openGlobalPopup()">
                    <i class="fas fa-university"></i> Select Your University
                </button>
                <button class="btn btn-white" onclick="openGlobalPopup()">
                    <i class="fas fa-phone-alt"></i> Talk to an Expert
                </button>
            </div>

            <div class="brand-logos">
                <img src="https://www.eklavyaoverseas.com/images/logo/who.png" alt="WHO">
                <img src="https://www.eklavyaoverseas.com/images/logo/wfme.png" alt="WFME">
                <img src="https://www.eklavyaoverseas.com/images/logo/ecfmg.png" alt="ECFMG">
                <img src="https://www.eklavyaoverseas.com/images/logo/nmc.png" alt="NMC">
            </div>
        </div>

        <!-- Right Illustration -->
        <div class="hero-illustration">
            <img src="https://www.eklavyaoverseas.com/images/right-side-img.png" alt="Study Abroad Illustration">
        </div>
    </div>

    <!-- Wave Divider -->
    <div class="wave-bottom">
        <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
            <path fill="#ffffff" d="M0,160L80,176C160,192,320,224,480,213.3C640,203,800,149,960,138.7C1120,128,1280,160,1360,176L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>
</section>

<style>
    :root {
    --primary-blue: #4A90E2; /* */
    --secondary-blue: #00D4FF; /* */
    --bg-gradient: linear-gradient(135deg, #1e5799 0%, #2989d8 50%, #4A90E2 100%);
    --white: #F8FAFC; /* */
    --text-muted: #94A3B8; /* */
}

.intellectual-hero {
    position: relative;
    min-height: 70vh;
    background: var(--bg-gradient);
    display: flex;
    align-items: center;
    padding-top: 80px;
    overflow: hidden;
    color: var(--white);
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
    z-index: 5;
    padding: 0 20px;
}

/* Text Styling */
.main-title {
    font-size: clamp(32px, 4vw, 56px);
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 30px;
}

/* Button Group */
.cta-group {
    display: flex;
    gap: 15px;
    margin-bottom: 40px;
}

.btn-white {
    background: var(--white);
    color: #333;
    padding: 12px 25px;
    border-radius: 50px;
    border: none;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: 0.3s ease;
}

.btn-white:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}

/* Logo Section */
.brand-logos {
    display: flex;
    align-items: center;
    gap: 30px;
    opacity: 0.9;
}

.brand-logos img {
    height: 40px;
    filter: brightness(0) invert(1); /* Makes logos white */
}

/* Illustration */
.hero-illustration img {
    width: 100%;
    max-width: 600px;
    height: auto;
}

/* Wave Effect */
.wave-bottom {
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 100%;
    line-height: 0;
}

.wave-bottom svg {
    width: 100%;
    height: 150px;
}

/* Responsive */
@media (max-width: 991px) {
    .container {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .cta-group, .brand-logos {
        justify-content: center;
    }
    
    .hero-illustration {
        order: -1; /* Image moves to top on mobile */
    }
}
</style>