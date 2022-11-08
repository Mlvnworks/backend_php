<?php 
    declare(strict_types=1);
    // Data
    $arr = array([
        "brand" =>"Addidas",
        "size" => 32,
        "price" => 6000,
        "img" => "https://st4.depositphotos.com/3123063/31057/i/600/depositphotos_310577288-stock-photo-varna-bulgaria-august-13-2019.jpg" 
    ],[ 
        "brand" => "Nike",
        "size" => 36,
        "price" => 7000, 
        "img" => "https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bmlrZSUyMHNob2V8ZW58MHx8MHx8&w=1000&q=80" 
    ],[
        "brand"=> "Sneakers",
        "size" => 38,
        "price" => 13000,
        "img" =>"data:image/jpeg;base64,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"
    ],[ 
        "brand" => "Duralite",
        "size" => 37,
        "price" => 90, 
        "img" => "data:image/jpeg;base64,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"
    ],[     
    "brand" => "Sandugo",
    "size" => 12,
    "price" => 5000,
    "img" => "https://cdn.shopify.com/s/files/1/0267/1666/8080/products/Triton2_1445x.png?v=1607578671" 
]); 

//Data sorter
function sortArr(array $toSortArray ,string $toSortKey){ 
    $valuesSort = []; 
    for($i = 0; $i < count($toSortArray); $i++){ 
        $valuesSort = [...$valuesSort, $toSortArray[$i][$toSortKey]]; 
    } 
    
    sort($valuesSort);
    
    $handle = []; for($i = 0; $i < count($toSortArray); $i++){ 
        $x = $valuesSort[$i]; 
        $count = 0; 
        while($count < count($toSortArray)){ 
                if($toSortArray[$count][$toSortKey] === $x){ 
                    $handle = [...$handle,$toSortArray[$count]]; 
                } 
                $count++;
            } 
        } 
        return $handle;
    }  

    $handle = $arr;
    $filter = "default";

    if(isset($_GET["filter"])){
        $x = $_GET["filter"];
        $filter = $x; 
        if($x === "price"){
            
            $handle = sortArr($arr, "price");
        }else if($x === "brandname"){

            $handle = sortArr($arr, "brand");
        }else if($x === "size"){

            $handle = sortArr($arr, "size");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="./style/main.css">
        <title>Document</title>
    </head>
    <body>
        <header id="main-header">
            <h1>Products</h1>
        </header>
        <header id="category">
                <h3>Shoes</h3>
                <p>sort</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path fill="currentColor" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Zm2 4a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm2 4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z"/></svg>
                <form action="<?php echo $_SERVER["PHP_SELF"]?>" id="filter-form" method="GET">

                    <select name="filter" id="filter">
                        <option value="default">Default</option>
                        <option value="price">By Price</option>
                        <option value="brandname">By Brandname</option>
                        <option value="size">By Size</option>
                    </select>
                </form>
            </header>
        <main>
            <ul>
                <?php
                    array_map(function($shoe){
                        echo "
                        <li class='shoe-item'>
                            <span data-size ='${shoe['size']}' class='shoe-size'></span>
                            <img src ='${shoe['img']}'>
                            <h3>${shoe['brand']}</h3>
                            <p>P${shoe['price']}</p>
                        </li>";
                    }, $handle);
                ?>
            </ul>
        </main>
        <script>
            const filterForm = document.querySelector("#filter-form");
            const filter = document.getElementById('filter');

            filter.addEventListener('input', (e) => {
                filterForm.submit();
            })

            filter.value = "<?php  echo $filter?>";
        </script>
    </body>
</html>
