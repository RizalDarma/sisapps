<?php
include "inc/inc.koneksi.php";

$mod = $_GET['module'];

// Bagian Home
if ($mod=='home'){
	echo "<h2>Selamat Datang</h2>";
	echo "Selamat datang <b>$_SESSION[namalengkap] </b>, di Sistem Informas Proposal.";
	echo "<p align='justify'>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";
	echo "<p>Modul aplikasi Ini terdiri dari : </p>
		<ul>
			<li>Pengguna</li>
			<li>Daftar Dosen</li>
			<li>Daftar Mahasiswa</li>
		</ul>";
}
//users
elseif ($mod=='pengguna'){
    include "modul/pengguna/index.php";
}
elseif ($mod=='barang'){
    include "modul/barang/index.php";
}
//supplier
elseif ($mod=='supplier'){
    include "modul/supplier/index.php";
}
elseif ($mod=='beli'){
    include "modul/beli/index.php";
}
elseif ($mod=='jual'){
    include "modul/jual/index.php";
}
//lap_barang
elseif ($mod=='lap_barang'){
    include "modul/lap_barang/index.php";
}
elseif ($mod=='lap_beli'){
    include "modul/lap_beli/index.php";
}
elseif ($mod=='lap_jual'){
    include "modul/lap_jual/index.php";
}
elseif ($mod=='lap_stok'){
    include "modul/stok_barang/index.php";
}
elseif ($mod=='grafik_beli'){
    include "modul/grafik_beli/index.php";
}
elseif ($mod=='grafik_jual'){
    include "modul/grafik_jual/index.php";
}

// Apabila modul tidak ditemukan
else{
  echo "<b>MODUL BELUM ADA ATAU BELUM LENGKAP</b>";
}
?>