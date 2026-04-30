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

<style>
:root {
    --nexus-bg: #0a235b;
    --nexus-surface: #163a74;
    --nexus-primary: #ff7a00;
    --nexus-secondary: #ffda58;
    --nexus-text-main: #ffffff;
    --nexus-text-muted: rgba(255, 255, 255, 0.8);
}

.nexus-footer {
    background-color: var(--nexus-bg);
    color: var(--nexus-text-main);
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    border-top: 3px solid transparent;
    background-image: linear-gradient(var(--nexus-bg) 0%, var(--nexus-bg) 100%), 
                      linear-gradient(90deg, #ff7a00, #ff9500, #ffb347);
    background-origin: border-box;
    background-clip: padding-box, border-box;
}

.nexus-main {
    padding: 60px 0 40px;
}

.nexus-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
}

.nexus-left {
    flex: 1;
    text-align: left;
}

.nexus-right {
    flex: 1;
    text-align: right;
}

/* Brand Section */
.nexus-logo {
    height: 45px;
    margin-bottom: 16px;
    filter: brightness(0) invert(1);
}

.nexus-tagline {
    color: var(--nexus-text-muted);
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 24px;
    font-weight: 500;
}

.nexus-social-grid {
    display: flex;
    gap: 12px;
}

.nexus-social-link {
    width: 38px;
    height: 38px;
    border-radius: 8px;
    background: var(--nexus-surface);
    color: var(--nexus-primary);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid rgba(255,255,255,0.05);
}

.nexus-social-link:hover {
    background: var(--nexus-primary);
    color: white;
    transform: translateY(-4px);
    box-shadow: 0 10px 15px -3px rgba(74, 144, 226, 0.3);
}

/* Navigation & Headings */
.nexus-heading {
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    margin-bottom: 28px;
    color: var(--nexus-secondary);
    font-weight: 700;
}

.nexus-nav {
    list-style: none;
    padding: 0;
    margin: 0;
}

.nexus-nav li { margin-bottom: 14px; }

.nexus-nav-link {
    color: var(--nexus-text-muted);
    text-decoration: none;
    font-size: 15px;
    transition: color 0.2s ease;
}

.nexus-nav-link:hover {
    color: var(--nexus-secondary);
    padding-left: 4px;
}

/* Contact Details */
.nexus-contact-list { 
    margin-bottom: 0;
    max-width: 500px;
    margin-left: auto;
}

.nexus-contact-box {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    margin-bottom: 16px;
    color: var(--nexus-text-muted);
    font-size: 15px;
    text-align: left;
}

.nexus-contact-box i {
    color: var(--nexus-primary);
    width: 16px;
    margin-top: 3px;
    flex-shrink: 0;
}

.nexus-contact-box span {
    line-height: 1.5;
}

/* Action Button */
.nexus-btn-primary {
    background: var(--nexus-primary);
    color: white;
    border: none;
    padding: 14px 24px;
    border-radius: 10px;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    transition: all 0.3s ease;
    width: 100%;
    justify-content: center;
}

.nexus-btn-primary:hover {
    background: #ff9500;
    box-shadow: 0 4px 20px rgba(255, 122, 0, 0.3);
}

/* Bottom Bar */
.nexus-base {
    background: var(--nexus-surface);
    padding: 24px 0;
    border-top: 1px solid rgba(255,255,255,0.05);
}

.nexus-base-flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.nexus-copy {
    font-size: 14px;
    color: var(--nexus-text-muted);
}

.nexus-legal {
    display: flex;
    gap: 24px;
}

.nexus-legal a {
    font-size: 13px;
    color: var(--nexus-text-muted);
    text-decoration: none;
}

.nexus-legal a:hover { color: var(--nexus-secondary); }

/* Responsive Adjustments */
@media (max-width: 768px) {
    .nexus-container {
        flex-direction: column;
        text-align: center;
    }
    
    .nexus-left,
    .nexus-right {
        text-align: center;
    }
    
    .nexus-contact-list {
        margin: 0 auto;
    }
}
</style>