<?php
$host ="localhost";
$user ="root";
$pass ="";
$db ="kamar_db";

$conn =mysqli_connect($host,$user,$pass,$db);

if(!$conn) {
    die("koneksi gaga" . mysqli_connect_error());
}
?>