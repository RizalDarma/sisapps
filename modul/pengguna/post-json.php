<?php
$page 		= isset($_POST['page']) ? $_POST['page'] : 1;
$rp 		= isset($_POST['rp']) ? $_POST['rp'] : 10;
$sortname 	= isset($_POST['sortname']) ? $_POST['sortname'] : 'username';
$sortorder 	= isset($_POST['sortorder']) ? $_POST['sortorder'] : 'asc';
$query 		= isset($_POST['query']) ? $_POST['query'] : false; 
$qtype 		= isset($_POST['qtype']) ? $_POST['qtype'] : false; 

if (!isset($responce)) 
    $responce = new stdClass();



$usingSQL = true;
function runSQL($rsql) {
	include '../../inc/koneksi.php';

	$result = mysql_query($rsql) or die ($rsql);
	return $result;
	mysql_close($connect);
}

function countRec($fname,$tname) {
	$sql = "SELECT count($fname) FROM $tname ";
	$result = runSQL($sql);
	while ($row = mysql_fetch_array($result)) {
		return $row[0];
	}
}

$sort = "ORDER BY $sortname $sortorder";
$start = (($page-1) * $rp);

$limit = "LIMIT $start, $rp";

$where = " "; 
if ($query) $where = " WHERE $qtype LIKE '%".str_replace("'","\'",$query)."%' ";

$sql = "SELECT username,nama_lengkap,level,blokir FROM admins $where $sort $limit";
$result = runSQL($sql);

$total = countRec("username","admins $where");

header("Content-type: application/json");
$responce->page = $page; 
$responce->total = $total; 
$responce->records = $total; 
$i=$start; 
while($line = mysql_fetch_array($result)){ 
$i++; 
$responce->rows[$i]['id']   = $line["username"]; 
$responce->rows[$i]['cell'] = array($i,$line["username"],$line["nama_lengkap"],$line["level"],$line["blokir"]); 
} 
echo json_encode($responce); 
?>