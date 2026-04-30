<?php
include('site_identity.php');

$name     = htmlspecialchars($_GET['name'] ?? 'Student');
$program  = htmlspecialchars($_GET['program'] ?? 'MBA/PGDM');
$site     = htmlspecialchars($_GET['site'] ?? $site_identity['site_name']);
$phone    = preg_replace('/\D/', '', $site_identity['phone']);
$waLink   = $site_identity['whatsapp'] ?? "https://wa.me/$phone";

$waMessage = rawurlencode("Hello, I have enquired on {$site} and wanted counselling for my admission in {$program}. Kindly assist me further.");
$waFinal   = "{$waLink}?text={$waMessage}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You | <?= $site ?></title>
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WQ5W8RXS');</script>
<!-- End Google Tag Manager -->
<?php
include('components/links.php');?>
</head>

<body>
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ5W8RXS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <section class="thankyouSection">
    <div class="thankyouBox">
      <img src="<?= $site_identity['logo']; ?>" alt="<?= $site ?>" class="thankyouLogo">

      <h1 class="thankyouTitle">Thank You, <?= $name ?>!</h1>
      <p class="thankyouMessage">
        Your application for <strong><?= $program ?></strong> at <strong><?= $site ?></strong> has been received.<br>
        Our team will reach out to you shortly for further guidance.
      </p>

      <div class="thankyouActions">
        <a  href="<?= $waFinal ?>" target="_blank" class="btnWhatsApp">
          💬 WhatsApp
        </a>
        <a href="tel:<?= $phone ?>" class="btnCall" title="Call Now">
          📞
        </a>
      </div>

      <div class="thankyouFooter">
        © <?= date('Y'); ?> <strong><?= $site ?></strong> — All Rights Reserved
      </div>
    </div>
  </section>
</body>
</html>
