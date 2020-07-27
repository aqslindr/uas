<?php
//rincian DB
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'gallery';

//Membuat koneksi dan memilih DB
$db = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Tidak dapat menghubungkan database: " . $db->connect_error);
}
