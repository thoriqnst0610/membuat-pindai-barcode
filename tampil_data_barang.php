<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: #f9f9f9;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }
        li:nth-child(odd) {
            background: #eeeeee;
        }
        .link-container {
            text-align: center;
            margin-top: 20px;
        }
        .link-container a {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 1em;
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
        }
        .link-container a:hover {
            background-color: #0056b3;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/proses-pindai.php'; ?>

<div class="container">
    <h1>Menampilkan Deskripsi Barang</h1>
    <?php if (!empty($mengambil_database)): ?>
        <ul>
            <li><strong>Item ID:</strong> <?= htmlspecialchars($mengambil_database[0]['item_id']) ?></li>
            <li><strong>Name:</strong> <?= htmlspecialchars($mengambil_database[0]['name']) ?></li>
            <li><strong>Type:</strong> <?= htmlspecialchars($mengambil_database[0]['type']) ?></li>
            <li><strong>Barcode:</strong> <?= htmlspecialchars($mengambil_database[0]['barcode_data']) ?></li>
        </ul>
    <?php else: ?>
        <p>Data tidak ditemukan.</p>
    <?php endif; ?>
    <div class="link-container">
        <a href="index.php">Buat Barcode Baru</a>
    </div>
</div>

</body>
</html>
