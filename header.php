<?php
session_start();
if (empty($_SESSION['username']) 
or empty($_SESSION['password']) 
or empty ($_SESSION['nama_pengguna'])
){
    echo "<script>
    alert('Maaf, untuk mengakses halaman ini, Anda diharuskan Login terlebih dahulu..!');
    document.location = 'index.php';
 </script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem Informasi Buku Tamu</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">



</head>

<body class="custom-card">
    <header>
        <div class="container-header">
            <img src="assets/img/Logo_HeaderPLN.jpg" alt="logo_PLN" class="logo4">
            <h1 class="text-header text-black">Data Tamu <span>PLN</span> </h1>
        </div>
    </header>
    <div class="container">
        <?php include "koneksi.php"; ?>
        <div>

        </div>