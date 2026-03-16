<?php

include 'includes/header.php';
include 'includes/navbar.php';

if(!isset($_SESSION['invois_data'])){
echo "Tiada invois.";
include 'includes/footer.php';
exit;
}

$invois = $_SESSION['invois_data'];
?>

<h1>Invois</h1>

<p>Nama: <?= $invois['nama_pelanggan'] ?></p>
<p>No: <?= $invois['no_invois'] ?></p>

<table>

<tr>
<th>Produk</th>
<th>Saiz</th>
<th>Kuantiti</th>
<th>Jumlah</th>
</tr>

<?php foreach ($invois['items'] as $item): ?>

<tr>
<td><?= $item['nama_produk'] ?></td>
<td><?= $item['saiz'] ?></td>
<td><?= $item['kuantiti'] ?></td>
<td>RM <?= $item['jumlah_harga'] ?></td>
</tr>

<?php endforeach; ?>

</table>

<h2>Jumlah: RM <?= $invois['jumlah_besar'] ?></h2>

<button onclick="window.print()">Cetak</button>

<?php include 'includes/footer.php'; ?>