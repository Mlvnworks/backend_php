<?php 
    $host = "containers-us-west-117.railway.app";
    $password = "uIAGcjbKWdz5lPWxDUBx";
    $username = "root";
    $database = "railway";
    $port = "6827";
    $conUrl = "mysql://root:uIAGcjbKWdz5lPWxDUBx@containers-us-west-117.railway.app:6827/railway";
    // $url = mysql://${{ MYSQLUSER }}:${{ MYSQLPASSWORD }}@${{ MYSQLHOST }}:${{ MYSQLPORT }}/${{ MYSQLDATABASE }};
    try{
        $connection = mysqli_connect($host,$username,$password,$database,$port );
        $id = rand(10000, 20000);
        // $query = "INSERT INTO users(id,first_name, last_name)
        //         VALUES ($id, 'Melvin', 'Agustin')";
        // $connection->query($query);

        $getUsersQuery = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM users ORDER BY last_name";
        $result = $connection -> query($getUsersQuery);
        $users = [];

        while($row = $result->fetch_assoc()){
            $users = [...$users, $row];
        }   

        print_r($users);
        
    }catch(Exception $err){
        print_r($err);
        // echo "Something Went Wrong..please Try Agin Later!";
    }
?>