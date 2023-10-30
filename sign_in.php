<?php
    header("Access-Control-Allow-Methods: POST");
    include("congig/user.php");

    $user = new User();

    if($_SERVER['REQUEST_METHOD']=="POST"){
       
        $email = $_POST['email'];
        $password = $_POST['password'];

        $res = $user->sign_in($email,$password);

        if($res){
            $arr['data'] = "Sign-In Succeful";
            http_response_code(201);
        }else{
            $arr['data'] = "Invaild Data!";
        }
    }else{
        $arr['error'] = "Only POST Method";
    }

    echo json_encode($arr);
?>