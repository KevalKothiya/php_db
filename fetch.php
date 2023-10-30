<?php
    header("Access-Control-Alloe-Methods: GET");
    include("config/config.php");
    $config = new Config();

    if($_SERVER['REQUEST_METHOD']=="GET"){
        
     
        $res = $config->getData(); 

        $resData = [];

       while($data = mysqli_fetch_assoc($res)){
        array_push($resData,$data);
       }
       $arr['data'] = $resData;
    }else{
        $arr['error'] = "Only GET http method";
    }

    echo json_encode($arr);
?>