<?php

use Zend\Mvc\Application;
use Zend\Stdlib\ArrayUtils;

/*********************  chdir(dirname(__DIR__));
 * This makes our life easier when dealing with paths. Everything is relative
 * to the application root now.
 * Devuelve la ruta de un directorio padre
 * chdir — Cambia de directorio
 * dirname — Devuelve la ruta de un directorio padre
 */
//echo getcwd() . "\n"; //C:\wamp\www\contacts\public
chdir(dirname(__DIR__));
//echo getcwd() . "\n"; //C:\wamp\www\contacts
//También veo que se puede modificar acá el home...

//.......................................................

// Decline static file requests back to the PHP built-in webserver
// Rechazar solicitudes de archivos estáticos al servidor incorporado 

//php_sapi_name — Devuelve el tipo de interfaz que hay entre PHP y el servidor
if (php_sapi_name() === 'cli-server') { 
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    if (__FILE__ !== $path && is_file($path)) {
        return false;
    }
    unset($path);
} //Pienso que esto se podría quitar y no pasa nada.

// Composer autoloading
include __DIR__ . '/../vendor/autoload.php';

//class_exists — Verifica si la clase ha sido definida
if (! class_exists(Application::class)) {
    throw new RuntimeException(
        "Unable to load application.\n"
        . "- Type `composer install` if you are developing locally.\n"
        . "- Type `vagrant ssh -c 'composer install'` if you are using Vagrant.\n"
        . "- Type `docker-compose run zf composer install` if you are using Docker.\n"
    );
}

// Retrieve configuration
$appConfig = require __DIR__ . '/../config/application.config.php';
if (file_exists(__DIR__ . '/../config/development.config.php')) {
    $appConfig = ArrayUtils::merge($appConfig, require __DIR__ . '/../config/development.config.php');
}

// Run the application!
Application::init($appConfig)->run();

//include __DIR__ . '/index.html';

