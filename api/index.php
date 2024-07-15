<?php

// Disable display of PHP deprecation notices in output
ini_set('display_errors', '0');
error_reporting(E_ALL & ~E_DEPRECATED & ~E_USER_DEPRECATED);

// Forward Vercel Serverless Function entry point to Laravel's public/index.php
require __DIR__ . '/../public/index.php';
