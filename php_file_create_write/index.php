<?php
    declare(strict_types=1);
    $countStart = 0;
    $countTo = 20;

    $fileDir ="./main.js";
    $handle = fopen($fileDir, 'w');

    while($countStart <= $countTo){
        fwrite($handle, "hello ${countStart}\n");
        $countStart++;
    }

    fclose($handle);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <textarea name="" id="root" cols="30" rows="10"></textarea>
    <script src="./main.js"></script>
</body>
</html>