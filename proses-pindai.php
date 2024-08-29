<?php

require_once __DIR__ . '/sql.php';
require_once __DIR__ . '/function.php';

$method = $_SERVER['REQUEST_METHOD'];

if($method !== "POST"){

    echo "maaf Method tidak Post";
    exit();

}

$ambil_nama_gambar = ambilnamagambar();
$ambil_nama_gambar_full = ambilnamagambarfull();
$memindai_gambar = memindaiGambar($ambil_nama_gambar_full);
$mengambil_database = mengambil($memindai_gambar);


