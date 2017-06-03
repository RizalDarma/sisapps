<script type="text/javascript">
$(function() {
	$("#theTable tr:even").addClass("stripe1");
	$("#theTable tr:odd").addClass("stripe2");
	$("#theTable tr").hover(
		function() {
			$(this).toggleClass("highlight");
		},
		function() {
			$(this).toggleClass("highlight");
		}
	);
});
function editRow(ID){
	var id = ID;
	var pilih = confirm('Data yang akan mengubah  = '+id+ '?');
	if (pilih==true) {
	$.ajax({
		type	: "POST",
		url		: "modul/pengguna/cari.php",
		data	: "id="+id,
		dataType : "json",				  
		success	: function(data){
			$("#nomor").val(ID);
			$("#identitas").val(data.id);
			$("#anggota").val(data.nama);
			$("#jk").val(data.jk);
			$("#tempat").val(data.tempat);
			$("#tgl").val(data.tgl);
			$("#alamat").val(data.alamat);
			$("#hp").val(data.hp);
			
			$("#nomor").attr("disabled",true);
			$('#form_input').dialog('open');
			return false;
		}
	});
	}
}
function deleteRow(ID) {
	var id	= ID;
   var pilih = confirm('Data yang akan dihapus  = '+id+ '?');
	if (pilih==true) {
		$.ajax({
			type	: "POST",
			url		: "modul/pengguna/hapus.php",
			data	: "id="+id,
			success	: function(data){
				$("#tampil_data").load("modul/pengguna/tampil_data.php");
			}
		});
	}
}
</script>
<?php
include '../../inc/koneksi.php';

$cari	= $_GET['cari'];

$where	= " WHERE username LIKE '%$cari%' OR nama_lengkap LIKE '%$cari%'";

echo "<table id='theTable' width='100%'>
		<tr>
			<th width='5%'>No</th>
			<th>User Name</th>
			<th>Nama Lengkap</th>
			<th>Level</th>
			<th>Blokir</th>
			<th width='10%'>Aksi</th>
		</tr>";
	$sql	= "SELECT * 
				FROM admins
				$where
				ORDER BY username";
	$query	= mysql_query($sql);
	
	$no=1;
	while($rows=mysql_fetch_array($query)){
		echo "<tr>
				<td align='center'>$no</td>
				<td align='center'>$rows[username]</td>
				<td>$rows[nama_lengkap]</td>
				<td >$rows[level]</td>
				<td align='center'>$rows[blokir]</td>
				<td align='center'>
				<a href='javascript:editRow(\"{$rows[username]}\")'>Edit</a>
				<a href='javascript:deleteRow(\"{$rows[username]}\")'>Hapus</a>			
				</td>
			</tr>";
	$no++;
	}
echo "</table>";
?>