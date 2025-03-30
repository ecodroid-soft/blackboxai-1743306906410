<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'service_provider_app');
define('DB_USER', 'root');
define('DB_PASS', '');

// Other configuration constants
define('SITE_NAME', 'Service Provider App');
define('BASE_URL', '/'); // Update this based on your server configuration

// Session configuration
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
session_start();