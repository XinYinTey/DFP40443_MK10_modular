<h1>Selamat Datang</h1>

<div class="grid">
<?php foreach ($data as $produk): ?>
    <div class="card">
        <img src="gambar/<?= $produk['gambar'] ?>" width="150">
        <p><?= $produk['nama'] ?></p>
    </div>
<?php endforeach; ?>
</div>