<?php
    require "connect.php";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $data = array();

        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM login WHERE username='$username' AND password='$password'");
        $check = mysqli_fetch_array($query);

        if(isset($check) && $check != null){
            $data['msg'] = "data entered successfully";
            $data['level'] = $check['level'];
            $data['username'] = $check['username'];
            echo json_encode($data);
        }else{
            $data['msg'] = "data not entered successfully";
            echo json_encode($data);
        }
    }
?>