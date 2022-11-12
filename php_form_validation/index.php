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
            height: clamp(600px, 100vh, 100vh);
            display: flex;
        }

        .divider{
            height: clamp(300px, 50vh, 50vh);
            background-color: slateblue;
            position: absolute;
            z-index: -1;
            width: 100%;
            top: 0;
        }

        form {
            width: clamp(300px, 30vw, 500px);
            box-shadow: 3px 3px 3px #aaa;
            background-color: #fff;
            border-radius: 8px;
            text-align: center;
            padding: 15px;
            margin: auto;
        }

        form > input{
            border-radius: 4px;
            margin-block: 1rem;
            padding: 8px;
            width: 100%;
        }

        form > input[type="text"],input[type="password"]{
            border: 2px slateblue solid;
            font-size: large;
            outline: none;
        } 

        form > input[type="text"]:focus, input[type="password"]:focus{
            outline: 3px slateblue solid;
        }

        form > input[type=submit]{
            background-color: slateblue;
            transition: all 100ms;
            font-weight: 700;
            font-size: large;
            border: none;
            color: white;
        }

        form > input[type=submit]:hover{
            background-color: darkslateblue;
            cursor:pointer;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="divider"></div>
    <form action="./welcome.php" method="POST">
        <input type="text" name="username" placeholder="Enter username..." required>
        <br/>
        <input type="password" name="password" placeholder="Enter password..." required>
        <br>
        <input type="submit" value="Log-in">
    </form>
</body>
</html>