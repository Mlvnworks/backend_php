<?php
    // Switch Lesson
    $state = null;
    switch($state){
        case 'on':
            echo "the programm is running...\n";
            break;
        case  'off':
            echo "the programm is not running...\n";
            break;
        default:
            echo "the programm is loading...\n";
            break;
    }

    echo "<br>";

    $value = null;

    if($value > 50){
        echo "high";

    }else if(!$value){

        echo "invalid the value of value is not integer";

    }else {
        echo "Low";
    }

    
?>