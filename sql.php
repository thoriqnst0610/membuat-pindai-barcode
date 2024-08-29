<?php

require_once __DIR__. '/koneksi.php';

function menyimpan(string $item_id, string $name, string $type, string $barcode_date)
{

    $database = getDatabaseConnection();
    $statement = $database->prepare("INSERT INTO products(item_id, name, type, barcode_data) VALUES(?,?,?,?)");
    $statement->execute([$item_id, $name, $type, $barcode_date]);
    return true;

}

function mengambil(string $barcode_date)
{

    $database = getDatabaseConnection();
    $statement = $database->prepare("SELECT * FROM products WHERE barcode_data = ?");
    $statement->execute([$barcode_date]);

    return $statement->fetchAll(PDO::FETCH_ASSOC);

}