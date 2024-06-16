<?php
    include "connect.php";
    
    $npm = $_POST["NPM"];
    $nama_mhs = $_POST["nama"];
    $prodi_mhs = $_POST["prodi"];
    $gender = $_POST['jenis_kelamin'];
    $perulangan = $_POST["ulangi"];

    $proses = mysqli_query($koneksi,"INSERT INTO mahasiswa (id, nama_mhs, prodi, jenis_klmn) values ('".$npm."','".$nama_mhs."','".$prodi_mhs."','".$gender."')")
                or die (mysqli_error($koneksi));

    if ($proses){
        echo"
        <script>
            alert('Data berhasil disimpan');
            window.location.href='index.php';
        </script>";
    } else echo "
        <script>
            alert('Data gagal disimpan');
            window.location.href='index.php';
        </script>";
?>