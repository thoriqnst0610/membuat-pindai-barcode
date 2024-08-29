<?php

require_once __DIR__ . '/sql.php';
require_once __DIR__ . '/function.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method !== "POST"){

    echo "maaf Method tidak Post";
    exit();

}

$item_id = $_POST['item_id'];
$name = $_POST['name'];
$type = $_POST['type'];
$barcode_date = $_POST['barcode_date'];

$buat_gambar_barcode = membuatBarcode($item_id, $barcode_date);
$menyimpan_kedatabase = menyimpan($item_id, $name, $type, $barcode_date);
