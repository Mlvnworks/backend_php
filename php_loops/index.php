<?php
    $users = [
        [
            "name" => "Melvin Agustin",
            "address" => "Villa Boado Talugtug N.E",
        ],
        [
            "name"=> "Jefferson Lamosa",
            "address" => "Saverona Talugtug N.E",
        ]
    ];

    $x = 0;
    $y = 0;
    while($x < count($users)){
        echo $users[$x]["name"] . '<br/>';
        $x++;
    }


    do{
        echo $y;
        $y++;
    }while($y <= count($users))
    
?>