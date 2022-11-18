<?php
    $uploadDir = "./uploads/";
    $err = false;
    $errMsg = "There was a problem uploading your file...";
    
    if(isset($_FILES["file"])){
        $targetDir = $uploadDir . basename($_FILES["file"]["name"]);

        if(file_exists($targetDir)){
            $err = true;
            $errMsg = "File already exist...";
        }

        if(!$err && move_uploaded_file($_FILES["file"]["tmp_name"],$targetDir)){
            echo "File Successfully Uploadde...";
        }else{
            echo $errMsg;
        };
    }
?>