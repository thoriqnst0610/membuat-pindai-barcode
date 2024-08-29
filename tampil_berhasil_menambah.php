<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berhasil Menambah</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }
        a {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 1.2em;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        a:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<?php include __DIR__. '/simpan_produk.php'; ?>

<div class="container">
    <h1>Berhasil Menambah Barcode</h1>
    <a href="pindaigambar.php">Pindai Gambar</a>
</div>

</body>
</html>
