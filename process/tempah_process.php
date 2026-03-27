<?php
session_start();
include '../data/produk.php';

$nama = $_POST['nama_pelanggan'];
$tempahan = $_POST['tempahan'];

$items = [];
$total = 0;

foreach ($tempahan as $id=>$saiz_list) {
    foreach ($data as $p) {
        if ($p['id']==$id) {
            foreach ($saiz_list as $saiz=>$qty) {
                if ($qty>0) {
                    $harga = $p['harga'][$saiz];
                    $jumlah = $qty * $harga;

                    $items[] = [
                        'nama'=>$p['nama'],
                        'saiz'=>$saiz,
                        'qty'=>$qty,
                        'harga'=>$harga,
                        'jumlah'=>$jumlah
                    ];

                    $total += $jumlah;
                }
            }
        }
    }
}

$_SESSION['invois_data'] = [
    'nama'=>$nama,
    'items'=>$items,
    'total'=>$total
];

header("Location: ../index.php?menu=invois");