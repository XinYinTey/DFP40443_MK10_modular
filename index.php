<?php
session_start();

$menu = $_GET['menu'] ?? 'utama';

include 'data/produk.php';

switch ($menu) {
    case 'utama':
        include 'view/utama.php';
        break;

    case 'tempah':
        include 'view/tempah.php';
        break;

    case 'invois':
        include 'view/invois.php';
        break;

    default:
        include 'view/error.php';
}