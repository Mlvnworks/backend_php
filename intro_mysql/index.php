<?php
    declare(strict_types=1);

    class Mysql{
        public function __construct(string $server, string $username, string $password ){
            $this -> server = $server;
            $this -> username = $username;
            $this -> password = $password;
        }

        function connect(){
            try{
                $con = new mysqli($this->server, $this -> username, $this -> password);
                return $con;
            }catch(Exception $err){
                print_r($err);
                return false;
            }
        }

        function createDatabase(string $databaseName){
            $query = "CREATE DATABASE ". $databaseName;
            $con = $this -> connect();

            try{
                $con->query($query);
                $con->close(); 
                return true;
            }catch(Exception $err){
                $con->close();
                return false;
            }
        }
    }


    $user = new Mysql("localhost", "root", "");
?>