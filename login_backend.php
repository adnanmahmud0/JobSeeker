<?php
session_start();
require('db_connect/db_connect.php');

if (isset($_POST['admin_id']) && isset($_POST['password'])){

	function validate($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;

	}

	$admin_id = validate($_POST['admin_id']);
	$password = validate($_POST['password']);

	if(empty($admin_id)){
		header("Location: index.php?error=Admin Id is required");
		exit();

	}else if(empty($password)){
		header("Location: index.php?error=password is required");
		exit();

	}else{
		//$password = md5($password);
		
		$sql = "SELECT * FROM admin_users WHERE admin_id='$admin_id' AND password='$password'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if($row['admin_id'] === $admin_id && $row['password'] === $password){
				$_SESSION['admin_id'] = $row['admin_id'];
				header("Location: dashboard.php");
				exit();

			}else{
			header("Location: index.php?error=Invalid admin Id or password!");
			exit();
			}
		}
		else{
			header("Location: index.php?error=Invalid admin Id or password!");
			exit();
		}
	}

}else{
	header("Location: index.php");
	exit();
}
?>