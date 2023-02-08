<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PELAPORAN PENGADUAN MASYARAKAT</title>
</head>
<body>
    
<?php

if (isset($_GET['page'])) {
    $page= $_GET['page'];

    switch ($page) {
        case 'login':
        include 'login.php';
        break;
        case 'registrasi':
        include 'registrasi.php';
        break;

      default:
            echo "Halaman tidak tersedia";
            break;
    }
} else {
    include 'home.php';
}

?>
</body>
</html>