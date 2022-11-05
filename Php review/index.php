<?php
    $x = 10;
    $y = 10;
    $sum = null;
    $product = null;

    function getSum(){
        global $x, $y, $sum;
        $sum = $x + $y;
    }

    $getProduct = function(){
        global $x,$y,$product;
        $product = $x - $y;
    };

    getSum();
    $getProduct();



    function statTest(){
        static $x1 = 0;
        echo "<li>$x1</li>";
        $x1++;
    }

    statTest();
    statTest();
    statTest();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Review</title>
</head>
<body>
    
</body>
</html>