<?php
require_once 'app/config/config.php';
require_once 'app/core/Router.php';

// Initialize Router
$router = new Router();

// Start the application
$router->dispatch();