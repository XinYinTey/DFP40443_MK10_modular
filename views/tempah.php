<h1>Borang Tempahan</h1>

<form method="POST">
    <div class="grid">
    <?php foreach ($data as $produk): ?>
        <div class="card">
            <img src="gambar/<?= $produk['gambar'] ?>" width="150">
            <h3><?= $produk['nama'] ?></h3>

            <?php foreach ($produk['harga'] as $saiz => $harga): ?>
                <div>
                    <?= ucfirst($saiz) ?> (RM <?= $harga ?>)
                    <input type="number"
                        name="tempahan[<?= $produk['id'] ?>][<?= $saiz ?>]"
                        class="qty-input"
                        data-price="<?= $harga ?>"
                        value="0" min="0">
                </div>
            <?php endforeach; ?>

        </div>
    <?php endforeach; ?>
    </div>

    <h3 id="total-price">RM 0.00</h3>

    <input type="text" name="nama_pelanggan" placeholder="Nama" required>

    <button type="submit">Teruskan</button>
</form>