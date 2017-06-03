<?php
include "../../inc/koneksi.php";

$table	= 'admins';
$id		= $_POST['id'];
$text	= "SELECT * FROM $table WHERE username='$id'";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);
if ($row>0){
while ($r=mysql_fetch_array($sql)){	

	$data['namalengkap']	= $r[nama_lengkap];
	$data['level']			= $r[level];
	$data['blokir']			= $r[blokir];
	echo json_encode($data);
}
}else{
	$data['namalengkap']	= '';
	$data['level']			= '';
	$data['blokir']			= '';	
	echo json_encode($data);
}
?>