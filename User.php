<?php 
    require_once "Db.php";
    class User extends Db
    
    {
        private $conn;

        public function __construct(){
            $this->conn=$this->connect();
        }

        public function register_users($fname, $lname, $email, $phone, $password){
            try{
                $sql = "INSERT INTO user(user_fname, user_lname, user_email, user_phone, user_password) VALUES(?,?,?,?,?)";
                $stmt=$this->conn->prepare($sql);
                $data=$stmt->execute([$fname, $lname, $email, $phone, $password]);
                return $data;
            }catch(PDOexception $e){
                return $e->getMessage();
            }
        }

        public function users_login($email, $password){
            try{
                $sql= "SELECT * FROM user WHERE user_email=? AND user_password=?";
                $stmt=$this->conn->prepare($sql);
                $stmt->execute([$email, $password]);
                $data=$stmt->fetch(PDO::FETCH_ASSOC);
                return $data;
            }catch(PDOException $e){
                return $e->getMessage();
            }
        }

        public function get_users($user_id){
            try{
                $sql = "SELECT * FROM user WHERE user_id=?";
                $stmt=$this->conn->prepare($sql);
                $stmt->execute([$user_id]);
                $data=$stmt->fetch(PDO::FETCH_ASSOC);
                return $data;
            }catch(PDOExcpetion $e){
                return $e->getMessage();
            }
        }
    }






?>