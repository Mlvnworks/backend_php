<?php
    if(isset($_GET["name"])){
        echo $_GET["name"];
    }else{
        header('Location:../index.html');
    }
?>
