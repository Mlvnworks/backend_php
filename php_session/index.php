<?php
    declare(strict_types=1);
    session_start();

    // 
    $users = [
        [
            "name" => "Melvin Agustin",
            "age" => 18,
        ],
        [
            "name" => "Jefferson Lamosa",
            "age" => 18,
        ],
        [
            "name" => "Gerryson Alfonso",
            "age" => 24
        ],
        [
            "name" => "Aaron Payog",
            "age" => 19
        ]
        ];
    
    $_SESSION["users"] = $users;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
    <title>Documents</title>
</head>
<body>
    <!-- header -->
    <?php include("./components/header.html") ?>
    
    <nav>
        <a href="./page.php">Users</a>
    </nav>
    <main>
        <header>
            Active Users
        </header>

        <ul>
            <?php array_map(function($user){
                echo "<li>".$user["name"] ."</li>";
            }, $users)?>
        </ul>
    </main>
</body>
</html>