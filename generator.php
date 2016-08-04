<?php

include('src/BarcodeGenerator.php');
include('src/BarcodeGeneratorHTML.php');
include('src/BarcodeGeneratorPNG.php');
include('src/BarcodeGeneratorSVG.php');
include('src/BarcodeGeneratorJPG.php');

function generate_barcode($id)
{
    $generatorPNG = new Picqer\Barcode\BarcodeGeneratorPNG();
    $generatorSVG = new Picqer\Barcode\BarcodeGeneratorSVG();
    $generatorHTML = new Picqer\Barcode\BarcodeGeneratorHTML();
    $generatorJPG = new Picqer\Barcode\BarcodeGeneratorJPG();

    echo $generatorSVG->getBarcode($id, $generatorPNG::TYPE_CODE_128);
}


//echo $generatorSVG->getBarcode('081231723897', $generatorPNG::TYPE_EAN_13);
//echo '<img src="data:image/png;base64,' . base64_encode($generatorPNG->getBarcode('081231723897', $generatorPNG::TYPE_CODE_128)) . '">';

//$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
//echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
?>