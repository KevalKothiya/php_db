<?php
    class Config {
        public $HOSTNAME = "localhost";
        public $USERNAME = "root";
        public $PASSWORD = " ";
        public $DB_NAME = "rnw";
        public $connect_res;

        public function connect(){
            $this->connect_res = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

            return $this->connect_res;
        }

        public function insertData($fruitName){
            $this->connect();

            $query = "INSERT INTO fruit(fruitName) VALUES('$fruitName');"; 
            $res = mysqli_query($this->connect_res, $query); 
            return $res;
        }

        public function getData(){
            $this->connect();

            $query = "SELECT * FROM fruit";

            $res = mysqli_query($this->connect_res, $query);

            return $res;
        }
    }
?>