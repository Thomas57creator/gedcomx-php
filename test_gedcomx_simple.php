<?php
require 'vendor/autoload.php';

use Gedcomx\Conclusion\Person;
use Gedcomx\Conclusion\Name;
use Gedcomx\Conclusion\NameForm;

try {
    // Skapa ett nytt Person-objekt
    $person = new Person();
    $person->setId("P-123");

    // Skapa ett nytt Name-objekt och sätt namn
    $name = new Name();
    $nameForm = new NameForm();
    $nameForm->setFullText("John Doe");
    $name->setNameForms([$nameForm]);

    // Lägg till namnet till personen
    $person->setNames([$name]);

    echo 'Personens ID: ' . $person->getId() . PHP_EOL;
    echo 'Personens namn: ' . $person->getNames()[0]->getNameForms()[0]->getFullText() . PHP_EOL;
} catch (Exception $e) {
    echo 'Fel: ' . $e->getMessage() . PHP_EOL;
}
?>
