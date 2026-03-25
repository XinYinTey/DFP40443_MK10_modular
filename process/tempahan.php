<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST['nama_pelanggan']);
    $tempahan = $_POST['tempahan'] ?? [];

    $items = [];
    $jumlah = 0;

    foreach ($tempahan as $id => $saiz_list) {
        foreach ($data as $p) {
            if ($p['id'] == $id) {
                foreach ($saiz_list as $saiz => $qty) {
                    $qty = (int)$qty;
                    if ($qty > 0) {
                        $harga = $p['harga'][$saiz];
                        $total = $qty * $harga;

                        $items[] = [
                            'nama_produk'=>$p['nama'],
                            'saiz'=>$saiz,
                            'kuantiti'=>$qty,
                            'jumlah'=>$total
                        ];

                        $jumlah += $total;
                    }
                }
            }
        }
    }

    if ($jumlah == 0) {
        header("Location: index.php?menu=tempah");
        exit();
    }

    $_SESSION['invois_data'] = [
        'nama'=>$nama,
        'jumlah'=>$jumlah,
        'items'=>$items,
        'tarikh'=>date("d/m/Y"),
        'no_invois'=>"INV-".rand(10000,99999)
    ];

    header("Location: index.php?menu=invois");
    exit();
}