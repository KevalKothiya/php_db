<?php
    class user{

        public $HOSTNAME = "localhost";
        public $USERNAME = "root";
        public $PASSWORD = " ";
        public $DB_NAME = "rnw";
        public $connect_res;
        public function sign_in($email,$password){
            $this->connect();
    
            $query = "SELECT * FROM users WHERE email='$email';";
    
            $obj =mysqli_query($this->connect_res,$query); //return object
    
            $record = mysqli_fetch_assoc($obj);
    
            $_hash_password = $record['password'];
    
            $is_password_verified = password_verify($password,$_hash_password); //return boolean
    
            if($is_password_verified){
                return true;
            }else{
                return false;
            }
        }
    }
?>