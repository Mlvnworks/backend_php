<?php
    declare(strict_types=1);
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
    <table>
        <thead>
            <th>Name</th> <th>Id</th>
        </thead>
        <tbody>
            <?php 
                foreach(filter_list() as $ind => $filter){
                    echo "<tr>
                        <td>". $filter ."</td>
                        <td>". filter_id($filter)."</td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>