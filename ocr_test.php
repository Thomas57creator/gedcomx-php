<?php
require 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

$imagePath = 'D:\ASGR_System\Projekt_NextGen_1.03\gedcomx-php\uploads\slakttrad.png'; // Ange den nya sökvägen till din PNG-bild
$ocr = new TesseractOCR($imagePath);
$text = $ocr->run();

echo 'Upptäckt Text: ' . $text . PHP_EOL;
?>
