<?php
    declare(strict_types=1);
    
    class Posts{
        public  function __construct(){
            $this -> posts = []; 
        }

        function addPost(string $post, string $author) : void{
            $this -> posts = [
                [
                    "post" => $post,
                    "author" => $author,
                    "date" => date("y/m/d"),
                ],
                ...$this -> posts
            ];
        }
    }

    $postHandler = new Posts();

    if(isset($_POST["post"]) && isset($_POST["author"])){
        $postHandler -> addPost($_POST["post"], $_POST["author"]);
    }

    var_dump($postHandler -> posts);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
        <input type="text" name="post" id="post" required>
        <input type="text" name="author" id="author" required>
        <input type="submit" value="Post">
    </form>
</body>
</html>