<?php include 'site_identity.php'; ?>

<!-- Top Bar -->
<div class="top-bar">
    <div class="top-bar-content">
        <span class="top-bar-text"><?php echo $site_identity['site_name']; ?> : MBBS Abroad Consultant</span>
    </div>
</div>

<!-- Main Header -->
<header class="main-header">
    <div class="header-container">
        <div class="header-logo">
            <img src="<?php echo $site_identity['logo']; ?>" alt="<?php echo $site_identity['site_name']; ?>" class="logo-img">
        </div>
        
        <div class="header-actions">
            <!-- WhatsApp Button -->
            <a href="<?php echo $site_identity['whatsapp']; ?>" class="header-btn whatsapp-btn" target="_blank">
                <i class="fab fa-whatsapp"></i>
                <span>+91-9654021118</span>
            </a>
            
            <!-- Events Button -->
            <a href="#" class="header-btn events-btn" onclick="openGlobalPopup(); return false;">
                <i class="fas fa-compass"></i>
                <span>Guidance</span>
            </a>
            
            <!-- Social Media Icons -->
            <div class="header-social-icons">
                <a href="<?php echo $site_identity['facebook']; ?>" class="social-icon" target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="<?php echo $site_identity['instagram']; ?>" class="social-icon" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="<?php echo $site_identity['linkedin']; ?>" class="social-icon" target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="<?php echo $site_identity['youtube']; ?>" class="social-icon" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            
            <!-- Explore Menu -->

        </div>
    </div>
</header>

<script>
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenu) {
        mobileMenu.classList.toggle('active');
    }
}
</script>
