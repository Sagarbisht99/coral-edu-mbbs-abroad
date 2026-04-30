<?php
require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'config.php';
require_once dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'backend' . DIRECTORY_SEPARATOR . 'mail-config.php';
$currentDir = basename(__DIR__); // e.g., 'isms', 'alliance', 'iiebm'
$siteIdentityPath = dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . $currentDir . DIRECTORY_SEPARATOR . 'site_identity.php';
if (file_exists($siteIdentityPath)) {
  require_once $siteIdentityPath;
} else {
  $site_identity = [
    'site_name'  => ucfirst($currentDir),
    'email'      => 'info@mbapgdmadmission.com',
    'phone'      => '+91 9899579424',
    'whatsapp'   => 'https://wa.me/919899579424',
    'address'    => 'Noida, India',
    'logo'       => 'assets/img/logo.png',
    'preloader'  => 'assets/img/favicon.png',
  ];
}

header('Content-Type: application/json');

try {
  $site_name      = trim($_POST['site_name'] ?? ($site_identity['site_name'] ?? 'Unknown Site'));
  $name           = trim($_POST['name'] ?? '');
  $email          = trim($_POST['email'] ?? '');
  $phone          = trim($_POST['phone'] ?? '');
  $city           = trim($_POST['city'] ?? '');
  $program        = trim($_POST['program'] ?? '');
  $specialization = trim($_POST['specialization'] ?? '');
  $page_url       = $_SERVER['HTTP_REFERER'] ?? '';
  $ip_address     = $_SERVER['REMOTE_ADDR'] ?? 'N/A';
  $created_at     = date('Y-m-d H:i:s');

  if (empty($name) || empty($phone)) {
    throw new Exception("Please fill all required fields (Name & Phone).");
  }
  $stmt = $pdo->prepare("
    INSERT INTO leads 
    (site_name, name, email, phone, city, program, specialization, page_url, ip_address, created_at)
    VALUES 
    (:site_name, :name, :email, :phone, :city, :program, :specialization, :page_url, :ip_address, :created_at)
  ");
  $stmt->execute([
    ':site_name' => $site_name,
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':city' => $city,
    ':program' => $program,
    ':specialization' => $specialization,
    ':page_url' => $page_url,
    ':ip_address' => $ip_address,
    ':created_at' => $created_at
  ]);

  $cleanPhone = preg_replace('/\D/', '', $phone);
  $waMsg = rawurlencode("Hello $name, thank you for applying for $program at $site_name. Our team will connect with you shortly!");
  $waLink = "https://wa.me/$cleanPhone?text=$waMsg";

  $emailBody = "
  <div style='background:#f6f6f6;padding:30px;font-family:Poppins,sans-serif;'>
    <div style='max-width:650px;margin:auto;background:#fff;border-radius:12px;overflow:hidden;box-shadow:0 4px 18px rgba(0,0,0,0.08);'>
      <div style='background:#015ea3;color:#fff;text-align:center;padding:18px 25px;font-size:20px;font-weight:600;'>
        🧾 New Lead Enquiry from {$site_name}
      </div>
      <div style='padding:25px 30px;'>
        <p><strong style='color:#015ea3;'>Name:</strong> {$name}</p>
        <p><strong style='color:#015ea3;'>Phone:</strong> {$phone}</p>"
    . (!empty($email) ? "<p><strong style='color:#015ea3;'>Email:</strong> {$email}</p>" : "") . "
        " . (!empty($city) ? "<p><strong style='color:#015ea3;'>City:</strong> {$city}</p>" : "") . "
        " . (!empty($program) ? "<p><strong style='color:#015ea3;'>Program:</strong> {$program}</p>" : "") . "
        " . (!empty($specialization) ? "<p><strong style='color:#015ea3;'>Specialization:</strong> {$specialization}</p>" : "") . "
        <p><strong style='color:#015ea3;'>Page URL:</strong> {$page_url}</p>
        <p><strong style='color:#015ea3;'>IP Address:</strong> {$ip_address}</p>

        <hr style='border:1px dashed #ddd;margin:25px 0;'>

        <div style='text-align:center;'>
          <a href='{$waLink}' style='background:#25D366;color:#fff;text-decoration:none;padding:10px 22px;border-radius:6px;font-weight:600;margin-right:10px;display:inline-block;'>
            💬 Chat on WhatsApp
          </a>
          <a href='tel:+91{$cleanPhone}' style='background:#fe661d;color:#fff;text-decoration:none;padding:10px 22px;border-radius:6px;font-weight:600;display:inline-block;'>
            📞 Call Now
          </a>
        </div>
      </div>
      <div style='background:#015ea3;color:#fff;text-align:center;padding:15px;font-size:13px;'>
        {$site_name} | <span style='color:#fe661d;'>Lead Notification</span><br>
        <span style='color:#e2e2e2;'>This is an automated message from your landing page system.</span>
      </div>
    </div>
  </div>";

  $subject = "New Lead Enquiry - {$site_name} - {$name}";

  sendMail($subject, $emailBody);

  header("Location: thankyou.php?" . http_build_query([
    'name' => $name,
    'program' => $program,
    'site' => $site_name,
    'phone' => $cleanPhone
  ]));
  exit;

} catch (Exception $e) {
  echo json_encode([
    "status" => "error",
    "message" => "❌ " . $e->getMessage()
  ]);
}
?>
