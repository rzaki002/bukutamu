<?php
// Koneksi ke database (ganti dengan informasi koneksi database Anda)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbbukutamu";

$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Mendapatkan data gambar dari POST request
$imageData = $_POST['imageData'];

// Menyimpan gambar ke database
$sql = "INSERT INTO captured_images (image_data) VALUES ('$imageData')";

if ($conn->query($sql) === TRUE) {
    echo "Image saved to database successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Menutup koneksi database
$conn->close();
?>
