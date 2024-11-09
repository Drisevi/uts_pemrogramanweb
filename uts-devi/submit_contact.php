<?php
// Konfigurasi koneksi database
$host = 'localhost';
$username = 'root'; // username default di XAMPP
$password = ''; // kosongkan jika tidak ada password default
$dbname = 'kontak_db'; // Nama database yang dibuat

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Mengecek apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Menangkap data dari form
    $nama = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $keterangan = $conn->real_escape_string($_POST['message']);

    // Menyiapkan pernyataan SQL untuk memasukkan data
    $sql = "INSERT INTO kontak (nama, email, keterangan) VALUES ('$nama', '$email', '$keterangan')";

    // Eksekusi pernyataan SQL
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi
$conn->close();
?>
