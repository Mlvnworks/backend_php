<?php
    // String data types 
    $name1 = "Melvin Agustin";
    $name2 = "Jefferson Lamosa"; 

    // number
    $age1 = 18;
    $age2 = 18;

    // boolean 
    $single1 = true;
    $single12 = false;

    // array
    $hobbies1 = array('programming', 'watching anime');
    $hobbies2 = ['drawing', 'singing'];

    // Object
    class Shoe {
        public function __construct($brand, $size, $color){
            $this -> brand = $brand;
            $this -> size = $size;
            $this -> color = $color;
        }

        public function getAvPriced(){
            switch($this -> size){
                case "small" : 
                    return 2000;
                    break;
                case "medium":
                    return 4000;
                    break;
                case "large":
                    return 5500;
                    break;
                default:
                    return 3000;
                    break; 
            }
        }

        public function getPrice(){
            if($this -> brand === 'addidas'){
                return $this -> getAvPriced() + 7000;
            }else if($this -> brand === 'Nike'){
                return $this -> getAvPriced() + 4000;
            }
        }
}

    $newShoe = new Shoe('addidas', 'large', 'black');

    print_r($newShoe -> getPrice());

    //null value
    $x = "Hello World";
    $x = null;

    var_dump($x);
?> 