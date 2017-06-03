<?php
include "../../inc/koneksi.php";
$table	= 'admins';
$id		= $_POST['id'];
$sql 	= mysql_query("SELECT * FROM $table WHERE username= '$id'");
$row	= mysql_num_rows($sql);
if ($row>0){
	$input = "DELETE FROM $table WHERE username= '$id'";
	mysql_query($input);
	echo "Data Sukses Dihapus";
}
?>