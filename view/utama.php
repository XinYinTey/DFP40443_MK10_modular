<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<h1 class="page-title">Selamat Datang</h1>

<div class="gallery-row">
<?php foreach ($data as $produk): ?>
<img src="gambar/<?= $produk['gambar'] ?>" class="gallery-thumb">
<?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>