<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login System</title>
	<link rel="stylesheet" href="css/style_login.css" type="text/css"/>

	<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript">

		function validasi(form){
			if (form.username.value == ""){
			$.messager.show({
				title:'Info',
				msg:'Username Tidak Boleh Kosong.',
				timeout:2000,
				showType:'slide'
			});
				form.username.focus();
				return (false);
			}
			if (form.password.value == ""){
			$.messager.show({
				title:'Info',
				msg:'Password Tidak Boleh Kosong.',
				timeout:2000,
				showType:'slide'
			});
				form.password.focus();
				return (false);
			}
			return (true);
		}

	</script>
	<style>
		body {
			background:url(images/page_bg.png);
		}

		#logo_login{
			width: 400px;
			margin:0px auto;
			margin-top:150px;
		}

		.login_image{
			padding: 0px 0px 0px 100px;
		}

		.login-inside	{ 
			width: 400px;
			font-family:Verdana, Geneva, sans-serif;
			font-size:12px;
			margin: 0px auto;  
			margin-top: 0px; 
			padding: 10px;
			border:3px solid #F30;
			/* background-color:#f9f9f9; */
			background:url(images/bg_inside.png);
			-moz-border-radius: 5px 5px 5px 5px; 
			-webkit-border-radius: 5px 5px 5px 5px; 
			border-radius: 5px 5px 5px 5px; 
			-moz-box-shadow:0px 0px 4px #aaa;
		    -webkit-box-shadow:0px 0px 4px #aaa;
		    box-shadow:0px 0px 4px #aaa;
		}

		.login-data		{ 
			padding: 35px 0px 20px 0px;
			color:#F00;
			font-weight:bold;
		}
	</style>

</head>
<body>
	<div id="logo_login">
		<div class="login_image">
			<img src="images/logo-login.png" width="200px" height="200px" />
		</div>
	</div>
	<div class="login-inside">
		<div class="login-data">
			<form name="form" action="ceklogin.php" onsubmit="return validasi(this)" method="post">
				<table width="100%" border="0" cellspacing="0" cellpadding="0">
					<tr>
						<td>
							<div align="center">
								<table cellpadding="0" cellspacing="0">
									<tr>
										<td height="25" width="50">Username</td>
										<td>&nbsp;:&nbsp;<input type="text" name="username"  id="username" class="easyui-validatebox" data-options="required:true,validType:'length[1,10]'" /></td>
									</tr>
									<tr>
										<td height="25" width="50">Password</td>
										<td>&nbsp;:&nbsp;<input type="password"  name="password" id="password" class="easyui-validatebox" data-options="required:true,validType:'length[1,10]'" /></td>
									</tr>
									<tr>
										<td height="35" colspan="2">
											<div class="toolbar" align="right">
												<button type="submit" name="submit" id="submit" class="easyui-linkbutton" data-options="iconCls:'icon-lock_open'">Login</button>
											</div>
										</td>
									</tr>
								</table>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>