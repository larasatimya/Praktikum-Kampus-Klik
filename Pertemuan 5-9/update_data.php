<?php
include "connect.php"; // Ensure this points to your database connection file

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $query = "UPDATE mahasiswa SET nama_mhs='$nama', prodi='$prodi', jenis_klmn='$jenis_kelamin' WHERE id=$id";
    
    if (mysqli_query($koneksi, $query)) {
        header("Location: index.php"); // Redirect to the main page
        exit; // Ensure no further code is executed
    } else {
        echo "Error updating record: " . mysqli_error($koneksi);
    }
} else {
    echo "Invalid request!";
    exit;
}
?>
