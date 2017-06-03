<?php
include 'inc/ceksession.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>SiSPRO</title>

	<link rel="stylesheet" type="text/css" href="css/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/icon.css">
	<link rel="stylesheet" type="text/css" href="css/flexigrid.pack.css" />
	<link rel="stylesheet" type="text/css" href="css/style_table.css">


	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="js/flexigrid.pack.js"></script>

	<style type="text/css">
		body {
			font-family:Verdana, Geneva, sans-serif;
			font-size:12px;
		}
		a {
			text-decoration:none;
			color:#000;
		}
		#content {
			padding:10px 10px 10px 10px;
		}
		.atas{
			background: url(images/minimalist8.png), -moz-linear-gradient(top, #9bbe25 0%, #FFFFFF 60%) fixed;
			background: url(images/minimalist8.png), -ms-linear-gradient(top, #9bbe25 0%, #FFFFFF 60%) fixed;
			background: url(images/minimalist8.png), -o-linear-gradient(top, #9bbe25 0%, #FFFFFF 60%) fixed;
			background: url(images/minimalist8.png), -webkit-gradient(linear, 0% 0%, 0% 100%, from(#9bbe25 0%), to(#FFFFFF 60%)) fixed;
			background: url(images/minimalist8.png), -webkit-linear-gradient(top, #9bbe25 0%, #FFFFFF 60%) fixed;
		}
	</style>

</head>

<body class="easyui-layout">
	<div class="atas" data-options="region:'north',border:false" style="height:80px;padding:10px">
    	<img src="" />
    </div>
	<div data-options="region:'west',split:true,title:'Menu Utama',iconCls:'icon-menu'" style="width:200px;padding:10px;">
	    <?php
		include 'menu.php';
		?>
    </div>
	<div class="bawah" data-options="region:'south',border:false" style="height:40px;padding:10px;color:#FFF; background:#9bbe25;">
	    <div align="center">
	    Copy Right &copy; Rizal Darmawan Nugroho.
	    </div>
    </div>
	<div id="content" data-options="region:'center',title:'Content',iconCls:'icon-content'">
	    <?php
		include 'content.php';
		?>
    </div>
</html>