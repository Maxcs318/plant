<?php
session_start();
require_once("connectDB.php");

$strUsername = $_POST['username'];
$strPassword = $_POST['password'];

$sql = "SELECT * FROM member WHERE m_username = '".$strUsername."' and m_password = '".$strPassword."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

	if ($result->num_rows == 0) {
		echo "Username and Password Incorrect!";
		exit();
	}
	else
	{	
		$_SESSION["m_id"] = $row["m_id"];
		$_SESSION["m_firstname"] = $row["m_firstname"];
		$_SESSION["m_lastname"] = $row["m_lastname"];
		$_SESSION["m_email"] = $row["m_email"];
		$_SESSION["m_phone"] = $row["m_phone"];
		$_SESSION["m_status"] = $row["m_status"];
		
		//Bla Bla Bla
		session_write_close();
		if($row["m_status"] == "admin"){
			header("location:../Actor/Admin/AdminPage.php");
		}else if($row["m_status"] == "master"){
			header("location:../Actor/Master/MasterPage.php");
		}else if($row["m_status"] == "user") {
			header("location:../Actor/User/UserPage.php");
		}
			
	}
$conn->close();
    
?>