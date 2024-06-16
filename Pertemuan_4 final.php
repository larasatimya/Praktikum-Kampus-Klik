<?php
    $nama_mahasiswa = "Ariel Tatum";
    $nama_kamu = "Andi motor";
    $pekerjaan = "Ibu Rumah Tangga";

    if($nama_mahasiswa == "Ariel Tatum"){
        if($pekerjaan == "Aktris"){
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 1000000000;
        }
        else{
            $jenis_kelamin = "Perempuan";
            $penghasilan_perbulan = 2000000;
        }
    } else if($nama_kamu == "Andi"){
        $jenis_kelamin = "Laki-Laki";
    }else{
        $jenis_kelamin = "??";
    }

    echo "halo ".$nama_mahasiswa." Selamat <br> datang, saya ".$nama_kamu." jenis kelamin kamu adalah ".$jenis_kelamin." penghasilan Anda ".$penghasilan_perbulan;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    Calon pacar saya....
</body>
</html>