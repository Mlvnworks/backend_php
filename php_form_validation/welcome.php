<?php
    $username;
    if(isset($_POST["username"]) && isset($_POST["password"])){
        $username = htmlspecialchars($_POST["username"]);
    }else{
        header("Location:./index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *,::before,::after{
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #000;
        }
        #main-header{
            background-color: slateblue;
            font-weight: bold;
            padding:15px;
            color: white;
        }

        main {
            -webkit-text-fill-color: transparent;
            background:url("./assets/main.jpg");
            -webkit-background-clip: text;
            display: flex;
            height:100vh;

        }
        main > header {
            text-align: center;
            margin: auto;
        }

        main > header > h2{
            font-weight: 900;
            font-size: 9rem;
        }

        main > header > h2::before{
            content: attr(data-text);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header id="main-header">
        <h1>Greeter.com<h1>
    </header>
    <main>
        <header>
            <h2 data-text="Welcome <?php echo strtoupper($username) ?>"></h2>
        </header>
    </main>
</body>
</html>