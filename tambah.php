<?php
include './koneksi.php';

// Aktifkan error reporting untuk debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Validasi jika file diunggah
if (isset($_FILES['foto_vidio']) && $_FILES['foto_vidio']['error'] === UPLOAD_ERR_OK) {
    $foto_vidio = $_FILES['foto_vidio']['name'];
    $ukuran_foto_vidio = $_FILES['foto_vidio']['size'];
    $tmp_foto_vidio = $_FILES['foto_vidio']['tmp_name'];
    $ekstensi_diperbolehkan = array('jpg', 'jpeg', 'png'); // Format yang diizinkan
    $x = explode('.', $foto_vidio);
    $ekstensi = strtolower(end($x));
    $path_foto_vidio = "uploads/" . $foto_vidio;

    // Validasi ekstensi file dan ukuran file
    if (in_array($ekstensi, $ekstensi_diperbolehkan) && $ukuran_foto_vidio <= 2000000) {
        // Pindahkan file ke folder tujuan
        if (move_uploaded_file($tmp_foto_vidio, $path_foto_vidio)) {
            // Simpan data ke database
            $query = "INSERT INTO foto_vidio (foto_vidio) VALUES ('$foto_vidio')";
            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
            } else {
                // Debug jika query gagal
                echo "<script>alert('Gagal menyimpan data ke database!');</script>";
                error_log("Error Database: " . mysqli_error($koneksi));
            }
        } else {
            echo "<script>alert('Gagal mengunggah file!'); window.history.back();</script>";
        }
    } else {
        // Pesan error jika file tidak valid
        echo "<script>alert('File tidak valid atau ukurannya lebih dari 2MB!'); window.history.back();</script>";
    }
} else {
    // Pesan error jika file tidak diunggah dengan benar
    echo "<script>alert('File tidak ditemukan atau terjadi kesalahan saat upload!'); window.history.back();</script>";
}
?>
