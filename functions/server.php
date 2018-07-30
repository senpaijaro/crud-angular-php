<?php 
include 'config.php';

if(isset($_POST['action'])){
	switch ($_POST['action']) {
		case 'show':
			echo showUser();
		break;
		
		case 'save':
			$status = "";
			$firstName  = $conn->real_escape_string($_POST['firstName']);
			$middleName = $conn->real_escape_string($_POST['middleName']);
			$lastName   = $conn->real_escape_string($_POST['lastName']);
			$sql = "INSERT INTO tbluser (tfname,tmname,tlname) VALUES ('$firstName','$middleName','$lastName')";
			$result = $conn->query($sql);
			$data = "";
			if(!$result){
				$status = "ERROR";
			}
			$row  = showUser();
			$data ='{"status": ['.$status.']}';
			echo $data;
		break;

		case 'delete':
			$status = "";
			$id  = $conn->real_escape_string($_POST['id']);
			$sql = "DELETE FROM tbluser WHERE tid = $id ";
			$result = $conn->query($sql);
			$data = "";
			if(!$result){
				$status = "ERROR";
			}
			$row  = showUser();
			$data ='{"status": ['.$status.']}';
			echo $data;
		break;

		case 'edit':
			$id   = $conn->real_escape_string($_POST['id']);
			$data  = showUser($id);
			echo $data;
		break;

		case 'update':
			$status = "";
			$id   		= $conn->real_escape_string($_POST['id']);
			$firstName  = $conn->real_escape_string($_POST['firstName']);
			$middleName = $conn->real_escape_string($_POST['middleName']);
			$lastName   = $conn->real_escape_string($_POST['lastName']);

			$sql = "UPDATE tbluser SET tfname = '$firstName', tmname = '$middleName', tlname = '$lastName' WHERE tid = $id";
			$result = $conn->query($sql);
			$data = "";
			if(!$result){
				$status = "ERROR";
			}
			$row  = showUser();
			$data ='{"status": ['.$status.']}';
			echo $data;
		break;
	}
}