<?php

function sukses_masuk($username,$pass,$namalengkap){
	// Apabila username dan password ditemukan
    session_start();
	include "timeout.php";
	
	$_SESSION[namauser]     = $r[username];
	$_SESSION[namalengkap]  = $r[nama_lengkap];
	$_SESSION[leveluser]    = $r[level];
	
		// session timeout
	$_SESSION[login] = true;
	timer();


	header('location:dashboard.php?module=home');
	//$hasil = 'login';
	return false;
}

function login_gagal(){
  echo "<link href='css/screen.css' rel='stylesheet' type='text/css'>
  <link href='css/reset.css' rel='stylesheet' type='text/css'>
  <link href='css/style_button.css' rel='stylesheet' type='text/css'>
  <center><br><br><br><br><br><br>Maaf, Username  tidak dikenal.";
  echo "<div> <a href='index.php'><img src='images/kunci.png'  height=176 width=143></a>
  </div>";
  echo "<input type=button class='button buttonblue mediumbtn' value='KEMBALI' onclick=location.href='login.php'></a></center>";	
  return false;
}

?>