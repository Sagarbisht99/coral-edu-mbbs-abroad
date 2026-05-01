<?php include 'site_identity.php'; ?>

<footer class="nexus-footer">
    <div class="nexus-main">
        <div class="nexus-container">
            <div class="nexus-left">
                <div class="nexus-logo-wrapper">
                    <img src="<?php echo $site_identity['logo']; ?>" alt="<?php echo $site_identity['site_name']; ?>" class="nexus-logo">
                </div>
                <p class="nexus-tagline">
                    Discover. Learn. Empower.
                </p>
            </div>
            
            <div class="nexus-right">
                <div class="nexus-contact-list">
                    <div class="nexus-contact-box">
                        <i class="fas fa-map-marker-alt"></i>
                        <span><?php echo $site_identity['site_name']; ?></span>
                    </div>
                    <div class="nexus-contact-box">
                        <span><?php echo $site_identity['address']; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="nexus-base">
        <div class="nexus-container nexus-base-flex">
            <p class="nexus-copy">&copy; <?php echo date('Y'); ?> <?php echo $site_identity['site_name']; ?>. All rights reserved</p>
        </div>
    </div>
</footer>