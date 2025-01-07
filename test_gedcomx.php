<?php
require 'vendor/autoload.php';

use Gedcomx\Conclusion\Person;

try {
    // Skapa ett nytt Person-objekt
    $person = new Person();
    $person->setId("P-123");
    $person->setName("John Doe");

    echo 'Personens ID: ' . $person->getId() . PHP_EOL;
    echo 'Personens namn: ' . $person->getName() . PHP_EOL;
} catch (Exception $e) {
    echo 'Fel: ' . $e->getMessage() . PHP_EOL;
}
?>
