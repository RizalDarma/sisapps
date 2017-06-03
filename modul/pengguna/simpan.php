<?php
include "../../inc/koneksi.php";


$table		="admins";
$username	=$_POST[username];
$nama		=$_POST[nama];
$pwd		=md5($_POST[pwd1]);
$level		=$_POST[level];
$blokir		=$_POST[blokir];

$sql = mysql_query("SELECT *
				   FROM $table 
				   WHERE username= '$username'");

$row	= mysql_num_rows($sql);
if ($row>0){
	if(empty($pwd)){
	$input	= "UPDATE $table SET 
								nama_lengkap	='$nama',
								level			='$level',
								blokir			='$blokir',
								lastupdate		= now()
					WHERE username= '$username'";
	}else{
	$input	= "UPDATE $table SET 
								nama_lengkap	='$nama',
								level			='$level',
								password		='$pwd',
								blokir			='$blokir',
								lastupdate		= now()
					WHERE username= '$username'";		
	}
	mysql_query($input);								
	echo "<b>Data Sukses diubah</b>";
}else{
	$input = "INSERT INTO $table (username,password,nama_lengkap,level,blokir)
				VALUES('$username','$pwd','$nama','$level','$blokir')";
	mysql_query($input);
	echo "<b>Data sukses disimpan</b>";
}
//echo "<br>".$input;
?>