<?php
    class Users extends Model
    {
        private $info;
        
        public function verifyUser($number, $pass)
        {
            $query = "SELECT * FROM users WHERE user_number = :unumber AND user_pass = :upass";
            $sql = $this->db->prepare($query);
            $sql->bindValue(":unumber", $number);
            $sql->bindValue(":upass", md5($pass));
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function createToken($unumber)
        {
            $token = md5(time().rand(0,9999).time().rand(0,9999));

            $query = "UPDATE users SET user_token = :token WHERE user_number = :unumber";
            $sql = $this->db->prepare($query);
            $sql->bindValue(":token", $token);
            $sql->bindValue(":unumber", $unumber);
            $sql->execute();

            return $token;
        }

        public function checkLogin()
        {
            if(!empty($_SESSION['token']))
            {
                $token = $_SESSION['token'];

                $query = "SELECT * FROM users WHERE user_token = :token";
                $sql = $this->db->prepare($query);
                $sql->bindValue(":token", $token);
                $sql->execute();

                if($sql->rowCount() > 0)
                {
                    $this->info = $sql->fetch();
                    return true;
                }
            }
            return false;
        }
    }
?>





