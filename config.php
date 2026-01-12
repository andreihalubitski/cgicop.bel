<?php
/**
 * Global Configuration File
 */

// ==== Admin Email ====
define('SITE_ADMIN_EMAIL', 'wpoceanmarketing@gmail.com');

// ==== Site Details ====
define('SITE_NAME', 'Bliize');
define('SITE_URL', 'https://wpolive.com');

// ==== Email Subject Settings ====
define('EMAIL_SUBJECT_PREFIX', 'Booking Request from');
define('EMAIL_HEADER_FROM_NAME', 'Online Booking Form');

// ==== Timezone ====
date_default_timezone_set('Asia/Dhaka');

// ==== Enable Debug Mode (Turn this to false on live site) ====
define('DEBUG_MODE', true);

// ==== SMTP Settings ====
define('SMTP_HOST', 'smtp.titan.email');
define('SMTP_PORT', 587); // Use 465 for SSL, 587 for TLS
define('SMTP_USERNAME', 'example@email.com'); // Titan email
define('SMTP_PASSWORD', 'example@120'); // Titan email password
define('SMTP_SECURE', 'tls'); // 'tls' or 'ssl'
