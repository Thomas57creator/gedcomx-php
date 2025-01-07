<?php
// Autoloader för att inkludera php-gedcom biblioteket
spl_autoload_register(function ($class) {
    $pathToGedcom = __DIR__ . '/php-gedcom/src/';
    $classPath = $pathToGedcom . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($classPath)) {
        require_once $classPath;
    }
});
?>
