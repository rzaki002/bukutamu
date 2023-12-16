<?php

session_start();

unset($_SESSION['id_user']);
unset($_SESSION['password']);
unset($_SESSION['nama_pengguna']);
unset($_SESSION['username']);

session_destroy();
echo "<script>
alert ('Anda Telah Keluar Dari Halaman Administrator..!');
document.location ='index.php';
</script>";