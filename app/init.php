<?php
// Load Config
require_once '../app/init.php';

// Autoload Core Libraries
spl_autoload_register(function($className) {
    require_once '../libraries' . $className . '.php';
});