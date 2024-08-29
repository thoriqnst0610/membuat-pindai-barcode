<?php
require 'vendor/autoload.php';

use Picqer\Barcode\BarcodeGeneratorPNG;
use PHPZxing\PHPZxingDecoder;


function membuatBarcode(string $itemId, string $barcode_date)
{

    // Generate barcode
    $generator = new BarcodeGeneratorPNG();
    $barcode = $generator->getBarcode($barcode_date, $generator::TYPE_CODE_128);

    // Simpan barcode ke file
    file_put_contents("barcodes/{$itemId}.png", $barcode);

    return true;
}

function memindaiGambar(string $namagambar)
{

    $path = 'barcodes/' . $namagambar;

    $config = array(
        'try_harder' => true,
        'multiple_bar_codes' => true
    );
    $decoder        = new PHPZxingDecoder($config);
    $decoder->setJavaPath('"C:\Program Files\Java\jdk-22\bin\java.exe"');
    $decodedData    = $decoder->decode("barcodes/".$namagambar);

    return $decodedData->getImageValue();

}

function ambilnamagambar()
{

    // Pastikan file diunggah dengan benar
    if (isset($_FILES['barcodeImage']) && $_FILES['barcodeImage']['error'] === UPLOAD_ERR_OK) {
        // Mendapatkan informasi file yang diunggah
        $fileTmpPath = $_FILES['barcodeImage']['tmp_name'];
        $fileName = $_FILES['barcodeImage']['name'];
        $fileSize = $_FILES['barcodeImage']['size'];
        $fileType = $_FILES['barcodeImage']['type'];
        $fileError = $_FILES['barcodeImage']['error'];

        $pathInfo = pathinfo($fileName);
        $fileBaseName = $pathInfo['filename']; // Nama file tanpa ekstensi
        
        // Mengembalikan nama file tanpa format
        return htmlspecialchars($fileBaseName);

    } else {

        return false;

    }
}

function ambilnamagambarfull()
{

    // Pastikan file diunggah dengan benar
    if (isset($_FILES['barcodeImage']) && $_FILES['barcodeImage']['error'] === UPLOAD_ERR_OK) {
        // Mendapatkan informasi file yang diunggah
        $fileTmpPath = $_FILES['barcodeImage']['tmp_name'];
        $fileName = $_FILES['barcodeImage']['name'];
        $fileSize = $_FILES['barcodeImage']['size'];
        $fileType = $_FILES['barcodeImage']['type'];
        $fileError = $_FILES['barcodeImage']['error'];
        
        // Mengembalikan nama file tanpa format
        return htmlspecialchars($fileName);

    } else {

        return false;

    }
}
