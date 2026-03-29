<?php

    class Database{
        public $connection;
        public function __construct($host, $username, $password, $dbname){
            $this->host = $host;
            $this->username = $username;
            $this->password = $password;
            $this->dbname = $dbname;
        }

        public function connect(){
            $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbname);
            if($this->connection->connect_error){
                die("Connection failed:");
            }
            echo "Connected successfully";
        }
        public function insert($table,array $data){

            

        }
    }




?>