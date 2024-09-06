<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Management System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            line-height: 1.6;
        }
        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        nav a {
            color: white;
            margin: 0 10px;
            text-decoration: none;
        }
        main {
            flex: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .form-container {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
            cursor: pointer;
            border: none;
        }
        .btn-submit {
            background-color: #2ecc71;
        }
        .btn-submit:hover {
            background-color: #27ae60;
        }
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
    </style>
</head>
<body>
    <header>
        <h1>Skema Programmer</h1>
    </header>

    <main>
        <div class="form-container" id="add-car">
            <h2>Tambah Mobil Baru</h2>
            <form action="<?= BASEURL ?>/produk/store" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama_mobil">Nama Mobil:</label>
                    <input type="text" id="nama_mobil" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="merk">Deskripsi:</label>
                    <input type="text" id="merk" name="deskripsi" required>
                </div>
                <div class="form-group">
                    <label for="model">Stok:</label>
                    <input type="text" id="model" name="stok" required>
                </div>
    
                <div class="form-group">
                    <label for="harga">Harga (Rp):</label>
                    <input type="number" id="harga" name="harga" required min="0">
                </div>

                <div class="form-group">
                    <label for="harga">Gambar</label>
                    <input type="file" id="harga" name="gambar" required min="0">
                </div>
               
                <button type="submit" class="btn btn-submit">Tambah Mobil</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Car Management System. All rights reserved.</p>
    </footer>
</body>
</html>