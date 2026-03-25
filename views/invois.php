<?php
if (!isset($_SESSION['invois_data'])) {
    echo "Tiada invois.";
    return;
}

$inv = $_SESSION['invois_data'];
?>

<h1>Invois</h1>

<p>Nama: <?= $inv['nama'] ?></p>
<p>No: <?= $inv['no_invois'] ?></p>
<p>Tarikh: <?= $inv['tarikh'] ?></p>

<table border="1" width="100%">
<tr>
    <th>Produk</th>
    <th>Saiz</th>
    <th>Kuantiti</th>
    <th>Jumlah</th>
</tr>

<?php foreach ($inv['items'] as $item): ?>
<tr>
    <td><?= $item['nama_produk'] ?></td>
    <td><?= $item['saiz'] ?></td>
    <td><?= $item['kuantiti'] ?></td>
    <td>RM <?= number_format($item['jumlah'],2) ?></td>
</tr>
<?php endforeach; ?>

<tr>
    <td colspan="3">Total</td>
    <td>RM <?= number_format($inv['jumlah'],2) ?></td>
</tr>
</table>

<button onclick="window.print()">Print</button>