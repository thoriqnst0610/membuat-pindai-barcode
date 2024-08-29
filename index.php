<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            color: #333;
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
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-size: 1.1em;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1em;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1em;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buat Barcode Produk</h1>
        <form action="tampil_berhasil_menambah.php" method="post">
            <label for="item_id">ID Item:</label>
            <input type="text" id="item_id" name="item_id" required>
            
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" required>
            
            <label for="type">Tipe:</label>
            <input type="text" id="type" name="type" required>
            
            <label for="barcode_date">Barcode Data:</label>
            <input type="text" id="barcode_date" name="barcode_date" required>
            
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>
</html>
