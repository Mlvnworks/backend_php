<?php
    if(isset($_COOKIE["posts"])){
        setcookie("posts", "", time() - 3600, "/");
    }

    header("Location: ./page/catcher.php");
?>