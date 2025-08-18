 <?php

    require_once "config.php";
    class Db
    {
        private $host = DB_HOST;
        private $name = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;
        
        public function connect(){
            $dsn = "mysql:host=".$this->host.";dbname=".$this->name;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            try{
                $connection = new PDO($dsn,$this->user,$this->pass,$options);
                return $connection;

            }catch(PDOException $e){
                echo $e->getMessage();
        }
        }


    }