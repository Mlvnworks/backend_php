<?php
    session_start();
    $server = $_SERVER["HTTP_HOST"];
    $username = "mlvnworks";
    $password = "Agustin@12";
    $dbName = "userList";
    
    $_SESSION["data"] = [
            "server" => $server,
            "username" => $username,
            "password" => $password,
            "database" => $dbName
    ];
    if(isset($_POST["save"])){
        $firstName = htmlspecialchars($_POST["first-name"]);
        $lastName = htmlspecialchars($_POST["last-name"]);
        $address = htmlspecialchars($_POST["address"]);
        $birthday = htmlspecialchars($_POST["birthday"]);
        $status = $_POST["status"] === "single" ? 1: 0;

        $connection = new mysqli($server, $username, $password, $dbName);
        if($connection){
            try{
                $query = "INSERT INTO user(first_name,last_name,address,single,birthday) 
                        VALUES ('".$firstName."','".$lastName."','".$address."',".$status.", '".$birthday."')";
                $connection->query($query);
                header("Location:./landin_page.php");
            }catch(Exception $err){
                header("Location:./index.html");
            }
        }else{
            header("Location:./index.html");
        }

        $connection->close();
    }
?>