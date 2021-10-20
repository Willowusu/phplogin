<?php

	require "connect.php";

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$data = array();

		$username = $_POST['username'];
		$password = $_POST['password'];

		$check = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
		$checkData = mysqli_fetch_array($check);

		if(isset($checkData)){
			$data['status'] = 1;
			$data['msg'] = "data already available";
			echo json_encode($data);
		}else{
			$query = mysqli_query($con, "INSERT INTO login VALUE(null, '$username', '$password')");
		
			if(isset($query)){
				$data['status'] = 2;
				$data['msg'] = "successfully entered";
				echo json_encode($data);
			}else{
				$data['status'] = 3;
				$data['msg'] = "data could not be added!";
				echo json_encode($data);
			}
		}
	}
