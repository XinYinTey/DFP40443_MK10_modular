<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<h1 class="page-title">Borang Tempahan</h1>

<form action="process/tempah_process.php" method="POST">

<div class="product-grid">

<?php foreach ($data as $produk): ?>

<div class="product-card">

<img src="gambar/<?= $produk['gambar'] ?>">

<h3><?= $produk['nama'] ?></h3>

<?php foreach ($produk['harga'] as $saiz => $harga): ?>

<label>
<?= ucfirst($saiz) ?> - RM <?= $harga ?>

<input type="number"
name="tempahan[<?= $produk['id'] ?>][<?= $saiz ?>]"
min="0"
value="0">
</label>

<?php endforeach; ?>

</div>

<?php endforeach; ?>

</div>

<input type="text" name="nama_pelanggan" placeholder="Nama pelanggan" required>

<button type="submit">Teruskan</button>

</form>

<?php include 'includes/footer.php'; ?>