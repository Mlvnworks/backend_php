<?php
    //$GLOBAl
    $x = 67;
    define('y', 120);

    function getResult(){
        return $GLOBALS["x"] + $GLOBALS["y"];
    }

    // $_SERVER
    $server = $_SERVER;

    //$_REQUEST
    if($server['REQUEST_METHOD'] === "POST"){
        // echo $_REQUEST['name'];
    }

    // $_POST
    if(isset($_POST["save"])){
        $name = htmlspecialchars($_POST["name"]);
        echo $name;
    }
?>


<!-- $_REQUEST -->
<form action="<?php echo $server['PHP_SELF']?>" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="Save" name="save">
</form>