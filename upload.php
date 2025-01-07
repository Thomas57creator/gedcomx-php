<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('upload_max_filesize', '10M');
ini_set('post_max_size', '10M');
require 'vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    // Kontrollera om filen har laddats upp korrekt
    if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        // Flytta den uppladdade bilden till uploads-mappen
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            echo "Bilden " . basename($_FILES["image"]["name"]) . " har laddats upp.";

            // Kör OCR-skriptet på den uppladdade bilden
            $ocr = new TesseractOCR($target_file);
            $text = $ocr->run();

            echo '<h2>Upptäckt Text:</h2>';
            echo '<pre>' . $text . '</pre>';
        } else {
            echo "Tyvärr, det uppstod ett fel vid flyttningen av den uppladdade filen.";
        }
    } else {
        echo "Tyvärr, det uppstod ett fel vid uppladdning av din bild. Felkod: " . $_FILES["image"]["error"];
    }
} else {
    echo '
    <html lang="sv">
    <head>
        <meta charset="UTF-8">
        <title>OCR Bilduppladdning</title>
    </head>
    <body>
        <h1>Ladda upp en bild för OCR</h1>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Välj bild:
            <input type="file" name="image" id="image">
            <input type="submit" value="Ladda upp bild" name="submit">
        </form>
    </body>
    </html>';
}
?>
