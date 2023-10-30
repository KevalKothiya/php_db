<?php
     header("Access-Control-Allow-Methods: POST");
     include("config/config.php");
 
     $config = new Config();

     if($_SERVER['REQUEST_METHOD']=="POST"){
        $fruitName = $_POST['fruitName'];

        $res = $config->insertData("fruitName");

        if($res){
            $arr['msg'] = "Record inserted.";
        }else{
            $arr['msg'] = "Record not insert!";
        }
    }else{
        $arr['error'] = "Only post method";
    }

    echo json_encode($arr);
?>