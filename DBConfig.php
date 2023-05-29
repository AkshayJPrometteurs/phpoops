<?php 
    class DBConfig{
        public static $host = 'localhost';
        public static $username = 'root';
        public static $password = '';
        public static $dbname = 'phpoops';
        public static $db;
        public static function prepare($sql){
            $connectionCheck = mysqli_connect(DBConfig::$host,DBConfig::$username,DBConfig::$password,DBConfig::$dbname);
            if($connectionCheck === FALSE){
                die('Connection Not Successfully');
            }
            if($sql){
                $data = mysqli_query($connectionCheck,$sql);
                return $data;
            }
        }
    }
?>