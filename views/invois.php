<?php
if (!isset($_SESSION['invois_data'])) {
    header("Location: index.php?menu=tempah");
    exit();
}

$data = $_SESSION['invois_data'];

include 'includes/header.php';
include 'includes/navbar.php';
?>

<h1>Invois</h1>

<table>
<tr><th>Produk</th><th>Qty</th><th>Jumlah</th></tr>

<?php foreach ($data['items'] as $item): ?>
<tr>
<td><?= $item['nama'] ?></td>
<td><?= $item['qty'] ?></td>
<td><?= $item['jumlah'] ?></td>
</tr>
<?php endforeach; ?>

</table>

<h2>Total: RM <?= $data['total'] ?></h2>

<?php include 'includes/footer.php'; ?>