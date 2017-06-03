<html>
<head>
<script language="javascript" src="modul/pengguna/ajax.js"></script>
<style type="text/css">
.flexigrid div.fbutton .add {
	background: url(images/add.png) no-repeat center left;
}
.flexigrid div.fbutton .edit {
	background: url(images/edit.png) no-repeat center left;
}
.flexigrid div.fbutton .cmdedit {
	background: url(images/edit.png) no-repeat center left;
}

.flexigrid div.fbutton .delete {
	background: url(images/close.png) no-repeat center left;
}
.flexigrid div.fbutton .refresh {
	background: url(images/refresh.png) no-repeat center left;
}
</style>
</head>
<body>
<?php
echo "<div id='dalam_content'>
<div id='tampil_data'>
<table class=\"data\" id=\"data\" style=\"display: none\"></table>
</div>
</div>";
?>
<script type="text/javascript">
</script>
<?php
echo "<div id=\"form_input\" class=\"easyui-dialog\" title=\"Input Data\" style=\"padding:5px;width:520px;height:300px;\"
	data-options=\"closed:true,modal:true,buttons:'#dlg-buttons',resizable:false\">
	<table width='100%'>
	<tr>
		<td>User Name</td>
		<td>:&nbsp;<input type='text' name='users' id='users' size='20' maxlength='20' 
		class=\"easyui-validatebox\" data-options=\"required:true,validType:'length[1,20]'\" ></td>
	</tr>
	<tr>
		<td>Nama Lengkap</td>
		<td>:&nbsp;<input type='text' name='namalengkap' id='namalengkap' size='50' maxlength='50'
		class=\"easyui-validatebox\" data-options=\"required:true,validType:'length[1,20]'\"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:&nbsp;<input type='password' name='pwd1' id='pwd1' size='50' maxlength='50' 
		class=\"easyui-validatebox\" data-options=\"required:true,validType:'length[1,20]'\"></td>
	</tr>
	<tr>
		<td>Ulangi Password</td>
		<td>:&nbsp;<input type='password' name='pwd2' id='pwd2' size='50' maxlength='50' 
		class=\"easyui-validatebox\" data-options=\"required:true,validType:'length[1,20]'\"></td>
	</tr>
	<tr>
		<td>Level</td>
		<td>:&nbsp;<select name='level' id='level'>
		<option value=''>-Pilih-</option>
		<option value='admin'>admin</option>
		<option value='user'>user</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>Blokir</td>
		<td>:&nbsp;<select name='blokir' id='blokir'>
		<option value='N' selected>N</option>
		<option value='Y'>Y</option>
		</select>
		</td>
	</tr>	
	</table>
</div>";
?>
</body>
</html>