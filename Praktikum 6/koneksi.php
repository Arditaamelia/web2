<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_puskesmas";
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$opt = [
    PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

// buat objek koneksinya
$dbh = new PDO($dsn, $user, $pass, $opt);