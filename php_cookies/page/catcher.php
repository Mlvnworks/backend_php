<?php
    declare(strict_types=1);

    if(isset($_COOKIE["posts"])){
        $posts = json_decode($_COOKIE["posts"]);
        
        array_map(function ($post){
            echo "<div>
                <header>".$post -> post. "</header>
            </div>";
        }, $posts);

    }else{
        echo "No post to show"; 
    }
?>