<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php include("./components/header.html") ?>
    <main>
        <section id="user-list">
            <?php 
                if(isset($_SESSION["users"]) && count($_SESSION["users"]) > 0){
                    $users = $_SESSION["users"];
                    array_map(function($user){
                        echo "
                            <div class='user-box'>
                                <div class='cover-photo'></div>
                                <div class='profile-photo'></div>
                                <p>".$user["name"]."</p>
                                <p>Age: ".$user["age"]."</p>
                            </div>"
                    ;
                    }, $users);
                }else{
                    echo "There's no active users";
                }
            ?>
        </section>
    </main>
</body>
</html>
