<?php 
    
    try{
        $connection = new mysqli($_SERVER["HTTP_HOST"],"mlvnworks", "Agustin@12","data_manipulate");
        
    }catch(Exception $err){
        print_r($err->getMessage());
    }
?>