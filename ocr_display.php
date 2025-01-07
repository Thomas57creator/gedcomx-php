<?php
require 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

$imagePath = 'D:\ASGR_System\Projekt_NextGen_1.03\gedcomx-php\uploads\slakttrad.png'; // Ange den nya sökvägen till din PNG-bild
$ocr = new TesseractOCR($imagePath);
$text = $ocr->run();
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>OCR Resultat</title>
</head>
<body>
    <h1>OCR Resultat</h1>
    <p>Upptäckt Text:</p>
    <pre><?php echo htmlspecialchars($text); ?></pre>
    <p>Visad Bild:</p>
    <img src="uploads/slakttrad.png" alt="Släktträd Bild">
</body>
</html>
