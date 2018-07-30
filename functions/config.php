<?php 

$host = "localhost";
$user = "root";
$pass = "senpaijaro";
$name = "test";

$conn = new mysqli($host, $user, $pass, $name);
if($conn->connect_error){
	die('no database found'. $conn->connect_error);
}

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

function showUser($id=""){
	global $conn;
	$where = ($id != "") ? "WHERE tid = $id" : "";
	$sql = "SELECT * FROM tbluser ".$where;
	$result = $conn->query($sql);
	$data = "";
	while($row = $result->fetch_array(MYSQLI_ASSOC)) {
	    if ($data != ""){
	    	$data .= ",";
	    }
	    $data .= '{"firstName":"'. $row["tfname"] . '",';
	    $data .= '"middleName":"'. $row["tmname"] . '",';
	    $data .= '"lastName":"'. $row["tlname"]. '",';
	    $data .= '"tid": "'.$row['tid'].'"}';
	}
	$data ='{"results":['.$data.']}';
	return $data;
}