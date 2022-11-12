<?php
    if(isset($_GET["name"])){
        $name = $_GET["name"];
        header('Location:./pages/dest.php?name='.$name);
    }else{
        header('Location:./index.html');
    }
?>
