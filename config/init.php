<?php
// Config file
require_once 'config.php';

// Autoloader
spl_autoload_register(function ($class_name) {
    require_once 'lib/' .$class_name. '.php';
});
