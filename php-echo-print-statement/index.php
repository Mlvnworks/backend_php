<?php
    $dist = $_SERVER['PHP_SELF'];
    $peoples = [
        [
            "id" => 8918819819,
            "name" => "Melvin Agustin",
            "age" => 18,
            "single" => true,
        ],
        [
            "id" => 89595980409,
            "name" => "Jefferson Lamosa",
            "age" => 18,
            "single" => true,
        ]
        ];
    if(isset($_POST["save"])){
        $nameInput = $_POST["fname"];
        $ageInput = $_POST["age"];
        $status = $_POST["status"] === "single" ? false : true;
        $id = random_int(100000000, 999999999);
        
        array_push($peoples, [
            "name" => $nameInput,
            "age" => $ageInput,
            "single" => $status,
            "id" => $id
        ]);
    }
    $peopleJsoned = json_encode($peoples);
?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        #main-form{
            background-color: slateblue;
            padding: 15px;
            margin:0 0 2rem 0;
            text-align: center;
        }

        #main-form > label, input{
            font-size: large;
        }

        #main-form > label{
            display: block;
            margin: .5rem 0;
            font-weight: bold;
        }

        #main-form > input[type=text],input[type=number] {
            padding: 5px;
        }

        #main-form > input[type=submit]{
            padding: 8px 20px;
            border-radius: 8px;
            font-weight: bold;
            font-size: medium;
            border: none;
            outline: none;
            cursor: pointer;
            margin-top: .5rem;
        }

        #main-form > input[type=submit]:active{
            outline: 3px solid rgba(250, 250, 250, .5);
        }

    </style>
    <title>Document</title>
</head>
<body>

    <!-- Form -->
    <form action="<?php $dist ?>" id="main-form" method="POST">
        <label for="fname">Enter full name</label>
        <input type="text" name="fname" id="f-name-input">
        <br>
        <label for="age">Age</label>
        <input type="number" name="age" id="age-input">

        <br>
       <label>Civil Status</label>
       <br>

       <label for="single">
           <input type="radio" name="status" value="Single" id="single">
           Single
       </label>
        <br>

        <label for="married">
            <input type="radio" name="status" value="married" id="married"/>
            Married
        </label>

        <input type="submit" name="save" value="Save">
    </form>

    <!-- User List -->
    <section>
        <header>
            <h3>User List</h3>
        </header>
        <ul>
            <?php 
                array_map(function($people){
                    echo '<button data-id="'. $people["id"] .'">'. $people["name"] .'</button> <br/>';
                }, $peoples)
            ?>
        </ul>
    </section>
    <script>
        //catch json arrays from php
        const users = <?php echo $peopleJsoned?>;

        //Dom Elements 
        const btns = document.querySelectorAll('button');
        const form = document.querySelector('form');
        const nameInput = form.querySelector('#f-name-input');
        const ageInput = form.querySelector('#age-input');
        
        form.addEventListener('submit', (e) => {
            if(nameInput.value === '' || ageInput.value === ''){
                e.preventDefault();
                console.log("Please Input All Fields");
            }
        }) 

        const proccess = (ev) => {
            const id = ev.target.getAttribute('data-id') * 1;
            const  targetUser = users.filter(user => user.id === id)[0];
            console.log(targetUser);
        }

        btns.forEach(btn => {
            btn.addEventListener('click', proccess);
        })
    </script>
</body>
</html>


