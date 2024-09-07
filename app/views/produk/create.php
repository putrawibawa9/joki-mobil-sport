     <?php
   require_once HEADER;
   ?>
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

     <?php
   require_once FOOTER;
   ?>