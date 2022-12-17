<?php 
    session_start();
    $con = new mysqli($_SESSION["data"]["server"],$_SESSION["data"]["username"], $_SESSION["data"]["password"], $_SESSION["data"]["database"]);

    if($con){
        print_r($con);
    }else{
        die;
    }
?>