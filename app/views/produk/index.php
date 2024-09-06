<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skema Programmer</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        header {
            background-color: #3498db;
            color: white;
            text-align: center;
            padding: 1rem;
        }
        main {
            flex: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }
        .action-links a {
            display: inline-block;
            padding: 6px 12px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
        }
        .action-links .edit {
            background-color: #3498db;
            margin-right: 5px;
        }
        .action-links .edit:hover {
            background-color: #2980b9;
        }
        .action-links .delete {
            background-color: #e74c3c;
        }
        .action-links .delete:hover {
            background-color: #c0392b;
        }

         .btn {
            display: inline-block;
            padding: 8px 16px;
            text-decoration: none;
            color: white;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s;
            cursor: pointer;
        }
        .btn-add {
            background-color: #2ecc71;
            margin-bottom: 15px;
        }
        .btn-logout {
            background-color: red;
            margin-bottom: 15px;
        }
         h1 {
            color: #333;
            background-color: #e0e0e0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <h1>Skema Programmer</h1>
    </header>

    <main>
        <h2>Tabel Mobil</h2>
       <a href="<?= BASEURL;?>/produk/create" class="btn btn-add">Tambah Mobil</a>
  
        <table id="dataTable">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data['produk'] as $row) : ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['deskripsi'] ?></td>
                    <td><?= $row['harga'] ?></td>
                    <td><?= $row['stok'] ?></td>
                    <td> <img height="100px" width="100px" src="<?=BASEURL?>/img/<?=$row['gambar']?>" alt="Foto Produk"></td>
              <td class="action-links">
                <a href="<?= BASEURL ?>/produk/show/<?= $row['id'] ?>" class="edit">Ubah</a>
                <a href="<?= BASEURL ?>/produk/delete/<?= $row['id'] ?>" class="delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
            </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <h1>Total Stock = <?= $data['totalStok']['total']?></h1>
             <a href="<?= BASEURL;?>/auth/logout" class="btn btn-logout">Logout</a>
    </main>

    <footer>
        
        <p>&copy; 2024 My Website. All rights reserved.</p>
    </footer>
</body>
</html>