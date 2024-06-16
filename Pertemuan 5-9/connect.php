<?php

$hostname = "localhost";
$userDataBase = "root";
$passwordUser = "";
$databaseName = "perkuliahan";

$koneksi = mysqli_connect($hostname,$userDataBase,$passwordUser,$databaseName) or die (mysqli_error($mysqli));

?>