<?php
    $posts = [
        ["post" => "hello World"],
        ["post" => "hello World too"],
        // ["post" => "nice work hehe"],
    ];
    
    $expires = time() + (86400 * 30);
    setcookie("posts", json_encode($posts), $expires, "/");
    header("Location: ./page/catcher.php");
?>