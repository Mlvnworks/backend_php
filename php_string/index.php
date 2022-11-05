<?php
    class Animal {
        public function __construct($name)
        {
            $this -> name = $name;
            $this -> lnth =  strlen($this -> name);
            $this -> wordCount = str_word_count($this -> name);
        }

        public  function toUpperCase(){
            return strtoupper($this -> name);
        }

        public  function pos($word){
            return strpos($this -> name , $word);
        }

        public  function replace($from, $to){
            return str_replace($from, $to, $this -> name);
        }
    }

    $animal = new Animal("Jefferson Lamosa");
?>