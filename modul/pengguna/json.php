<?php
include "../../inc/koneksi.php";

$table	= 'admins';
$cari	= $_POST['cari'];
//$page  = $_GET['page'];
//$limit = $_GET['rows'];


$text	= "SELECT * FROM $table WHERE username LIKE '%$cari%' ";
$sql 	= mysql_query($text);
$row	= mysql_num_rows($sql);


//$data->total=$row;
$data = '{"total":'. $row .',';
$data .= '"rows":[ ';
while ($r=mysql_fetch_array($sql)){	
	$data .= '{';
    $data .= '"username":"'.htmlspecialchars($r['username']).'",
	"namalengkap":"'.htmlspecialchars($r['nama_lengkap']).'",
	"level":"'.htmlspecialchars($r['level']).'",
	"blokir":"'.htmlspecialchars($r['blokir']).'"
    },';
}
$data = substr($data,0,strlen($data)-1);
$data .= ']';

$data .= '}';
echo $data;
//echo json_encode($data);
?>