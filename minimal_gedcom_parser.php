<?php

class MinimalGedcomParser {
    private $file;

    public function __construct($file) {
        $this->file = $file;
    }

    public function parse() {
        $contents = file_get_contents($this->file);
        return $this->parseLines(explode("\n", $contents));
    }

    private function parseLines($lines) {
        $data = [];
        foreach ($lines as $line) {
            $data[] = $this->parseLine($line);
        }
        return $data;
    }

    private function parseLine($line) {
        $parts = explode(' ', $line, 3);
        return [
            'level' => isset($parts[0]) ? $parts[0] : null,
            'tag' => isset($parts[1]) ? $parts[1] : null,
            'value' => isset($parts[2]) ? $parts[2] : null
        ];
    }
}

// Använd minimal parser för att läsa GEDCOM-fil
try {
    $gedcomFile = 'D:/ASGR_System/Projekt_NextGen_1.03/GEDCOM/file.ged';
    $parser = new MinimalGedcomParser($gedcomFile);
    $gedcomData = $parser->parse();
    echo 'GEDCOM Innehåll: ' . print_r($gedcomData, true) . PHP_EOL;
} catch (Exception $e) {
    echo 'Fel: ' . $e->getMessage() . PHP_EOL;
}
?>
