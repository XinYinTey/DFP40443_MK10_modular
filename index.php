<?php
session_start();

require_once "config/data.php";

$menu = $_GET['menu'] ?? 'utama';

include "views/header.php";

switch ($menu) {
    case 'utama':
        include "views/utama.php";
        break;

    case 'tempah':
        include "process/tempahan.php";
        include "views/tempah.php";
        break;

    case 'invois':
        include "views/invois.php";
        break;

    default:
        echo "<h1>Page not found</h1>";
}

include "views/footer.php";