<?php
session_start();
$user	= $_SESSION[namauser];
?>
<ul id="tt1" class="easyui-tree" data-options="animate:true,dnd:true">
    <li data-options="iconCls:'icon-home'">
        <span><a href="?module=home">Home</a></span>
    </li>
    <li data-options="iconCls:'icon-master'">
        <span>Master</span>
        <ul>
            <li data-options="iconCls:'icon-users'"><a href="?module=pengguna">Pengguna</a></li>
            <li data-options="iconCls:'icon-barang'"><a href="?module=daftarmhs">Daftar Mahasiswa</a></li>
            <li data-options="iconCls:'icon-supplier'"><a href="?module=daftardosen">Daftar Dosen</a></li>
        </ul>
    </li>
    <li data-options="iconCls:'icon-transaksi'">
        <span>Bayes</span>
        <ul>
            <li data-options="iconCls:'icon-beli'"><a href="?module=beli">Jalankan Bayesian</a></li>
        </ul>
    </li>
	<li data-options="iconCls:'icon-out'">
        <span><a href="logout.php">Keluar</a></span>
    </li>
</ul>
