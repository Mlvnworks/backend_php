<?php
session_start();

if(isset($_POST["sign-up"])){
        
        $firstName = htmlspecialchars($_POST["first-name"]);
        $lastName = htmlspecialchars($_POST["last-name"]);
        $age = htmlspecialchars($_POST["age"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $username = htmlspecialchars($_POST["username"]);
        $password = $_POST["password"];

        try{
            $connection = new mysqli($_SERVER["HTTP_HOST"], 'mlvnworks', "Agustin@12", "my_friends");

            $query = "INSERT INTO members(first_name, last_name, age, username, password, phone, bar_balance)
            VALUES ('$firstName','$lastName', $age,'$username','$password',$phone,0)";

            $connection -> query($query);
            
            $_SESSION['signedUp'] = ["firstName" => $firstName, "signedUp" => true];
            $connection->close();
        }catch(Exception $rr){
            $_SESSION['signedUp'] = ["firstName" => $firstName, "signedUp" => false];
        };

        
        header("Location:../proccess_result.php");
    }else{
        header("Location:../signup.php");
    }
?>