<?php
    $dir = './files/content.txt';

    function changeContent(string $content = ""){
        global $dir;
        $handle = fopen($dir, 'w');
        $newCont = fwrite($handle, strtoupper($content));
        fclose($handle);
    }


    if(isset($_GET["text"])){
        $inputCont = htmlspecialchars($_GET["text"]);
        changeContent($inputCont);
    }

    $fileContent =  readfile($dir);

    echo $fileContent;
?>


<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="GET">
    <input type="text" name="text" placeholder="Enter new file content...">
    <input type="submit" value="change">
</form>