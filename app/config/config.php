<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gif_db');

// App Root
define('APPROOT', dirname(dirname(__FILE__)));
// URL Root
define('URLROOT', 'http://localhost/GIF');
// Site Name
define('SITENAME', 'GIF Website');
// Builder.io public API key (set your Builder public API key here)
// Get this from your Builder.io space settings. It's safe to use the public/read key in client-side code.
define('BUILDER_API_KEY', 'f31bf3069eb243778aa34ede1ea1c34d');
// Default Builder model to request (usually 'page' or a custom model name)
define('BUILDER_MODEL', 'page');