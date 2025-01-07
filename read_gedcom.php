<?php
// Inkludera nödvändiga filer från vendor/liberu-genealogy/php-gedcom
require 'vendor/liberu-genealogy/php-gedcom/src/Models/RecordInterface.php';
require 'vendor/liberu-genealogy/php-gedcom/src/PhpGedcom/Gedcom.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Interfaces/ParserInterface.php';
require 'vendor/liberu-genealogy/php-gedcom/src/PhpGedcom/Parser.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Component.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Head.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Record.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Record/Head.php';

// Lägg till fler beroenden om det behövs
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Head/Note.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Head/Sour.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Head/Subm.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Head/SourCorp.php'; // Exkludera SourData.php
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Fam.php';
require 'vendor/liberu-genealogy/php-gedcom/src/Parser/Indi.php';

use Gedcom\Parser;

try {
    // Ange sökvägen till din GEDCOM-fil
    $gedcomFile = 'D:/ASGR_System/Projekt_NextGen_1.03/GEDCOM/file.ged';

    // Skapa en Parser och läs GEDCOM-filen
    $parser = new Parser();
    $gedcom = $parser->parse($gedcomFile);

    // Visa innehållet i GEDCOM-filen
    echo 'GEDCOM Innehållet: ' . print_r($gedcom, true) . PHP_EOL;
} catch (Exception $e) {
    echo 'Fel: ' . $e->getMessage() . PHP_EOL;
}
?>



