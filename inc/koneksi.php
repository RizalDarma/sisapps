<?php

$server = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "inventory"; 
$konek = mysql_connect($server, $username, $password) or die ("Gagal konek ke server MySQL" .mysql_error());
$bukadb = mysql_select_db($database) or die ("Gagal membuka database $database" .mysql_error());

// panggil fungsi validasi xss dan injection
require_once('validasi.php');
$val = new Validasi;
?>