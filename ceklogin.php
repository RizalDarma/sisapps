<?php
include "inc/koneksi.php";
include "inc/fungsi_login.php";

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}
$username	= anti_injection($_POST['username']);
$pass		= anti_injection(md5($_POST['password']));

if (!ctype_alnum($username) OR !ctype_alnum($pass)){
?>
<script>
	alert('Login Error, Coba lagi');
	window.location.href='login.php';
</script>
<?php
}else{
	$login	=mysql_query("SELECT * FROM admins WHERE username='$username' and password='$pass'");
	$ketemu	=mysql_num_rows($login);
	$data	=mysql_fetch_array($login);
	if ($ketemu>0){
		sukses_masuk($username,$pass,$data['nama_lengkap'],$data['level']);
	}else{
		login_gagal();
	}
}
?>
