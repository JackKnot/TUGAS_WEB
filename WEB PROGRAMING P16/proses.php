<?php
$koneksi = mysql_connect("localhost", "root", "registrasi");

$Username = $_POST['$Username'];
$Password = $_POST['$Password'];
$Address = $_POST['$Address'];
$Gender = $_POST['$Gender'];
$Religion = $_POST['$Religion'];
$Submit = $_POST['$Submit'];

$querry = "INSERT INTO registrasi VALUES(`$Username`, `$Password`, `$Address`, `$Gender`, `$Religion`, `$Submit`)";

mysql_query($koneksi, $querry);
?>