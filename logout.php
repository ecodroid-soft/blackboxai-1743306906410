<?php
require_once 'functions.php';

// Destroy the session
session_destroy();

// Set flash message
session_start();
set_flash_message('success', 'You have been logged out successfully.');

// Redirect to login page
header('Location: login.php');
exit();