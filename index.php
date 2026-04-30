<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQ5W8RXS');</script>
<!-- End Google Tag Manager -->

<?php include 'components/links.php'; ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ5W8RXS"
height="0" width="0"></iframe></noscript>

<?php include 'components/header.php'; ?>
<?php include 'components/popup-form-new.php'; ?>
<?php include 'components/herosection.php'; ?>
<?php include 'components/who-we-are.php'; ?>
<?php include 'components/choose-university-video.php'; ?>
<?php include 'components/why-study-mbbs-abroad.php'; ?>
<?php include 'components/popular-countries.php'; ?>
<?php include 'components/why-contact-us.php'; ?>
<?php include 'components/education-consultants.php'; ?>
<?php include 'components/testimonials.php'; ?>
<?php include 'components/top-medical-universities.php'; ?>
<?php include 'components/mbbs-myths.php'; ?>
<?php include 'components/faq-section.php'; ?>
<?php include 'components/floating-buttons.php'; ?>
<?php include 'components/country-marquee.php'; ?>
<?php include 'components/footer.php'; ?>

<script>
    // Page load hone par countdown start karein
    document.addEventListener('DOMContentLoaded', function() {
        startEarlyBirdCountdown();
    });

    function startEarlyBirdCountdown() {
        // Target Date: Current Year, June (Index 5), 30th Day, 23:59:59
        const currentYear = new Date().getFullYear();
        const targetDate = new Date(currentYear, 5, 30, 23, 59, 59).getTime();

        // Elements ko cache karein
        const daysEl = document.getElementById('days');
        const hoursEl = document.getElementById('hours');
        const minutesEl = document.getElementById('minutes');
        const secondsEl = document.getElementById('seconds');

        // Har 1 second mein update karne wala function
        const timerInterval = setInterval(function() {
            const now = new Date().getTime();
            const distance = targetDate - now;

            // Agar time khatam ho jaye
            if (distance < 0) {
                clearInterval(timerInterval);
                document.getElementById('countdown').innerHTML = "<span class='countdown-value' style='width:100%'>ADMISSIONS OPEN!</span>";
                return;
            }

            // Time calculation logic
            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Live DOM Update (padSart(2, '0') se single digit ke aage '0' lag jayega)
            if (daysEl) daysEl.textContent = days.toString().padStart(2, '0') + "d";
            if (hoursEl) hoursEl.textContent = hours.toString().padStart(2, '0') + "h";
            if (minutesEl) minutesEl.textContent = minutes.toString().padStart(2, '0') + "m";
            if (secondsEl) secondsEl.textContent = seconds.toString().padStart(2, '0') + "s";

        }, 1000);
    }
</script>

<body>






<!-- WhatsApp Fixed Button - Bottom Right -->
<?php include 'site_identity.php'; ?>
<a href="<?php echo $site_identity['whatsapp']; ?>" target="_blank" class="whatsapp-fixed">
    <i class="fab fa-whatsapp"></i>
</a>

</body>
</html>