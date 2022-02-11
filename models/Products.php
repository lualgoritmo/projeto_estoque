<?php

    class Products extends Model
    {
        public function getProducts($source = '')
        {
            $array = array();

                if(!empty($source))
                {
                    $query = "SELECT * FROM products WHERE cod = :cod OR nameP LIKE :nameP";
                    $sql = $this->db->prepare($query);
                    $sql->bindValue(":cod", $source);
                    $sql->bindValue(":nameP", '%'.$source.'%');
                    $sql->execute();
                }
                else
                {
                    $query = "SELECT * FROM products";
                    $sql = $this->db->query($query);
                }

                if($sql->rowCount() > 0)
                {
                    $array = $sql->fetchAll();
                }
            return $array;
        }
        private function verifyProduct($cod)
        {
            return true;
        }

        public function addProducts($cod, $nameP, $price, $quantity, $min_quantity)
        {
            if($this->verifyProduct($cod))
            {
                $query = "INSERT INTO products(cod, nameP, price, quantity,
                    min_quantity)
                    VALUES(:cod, :nameP, :price, :quantity, :min_quantity)";
                $sql = $this->db->prepare($query);
                $sql->bindValue(":cod", $cod);
                $qsql->bindValue(":nameP", $nameP);
                $sql->bindValue(":price", $price);
                $sql->bindValue(":quantity", $quantity);
                $sql->bindValue(":min_quantity", $min_quantity);
                $sql->execute();
            }
            else
            {
                return false;
            }
        }

        public function editProduct($cod, $nameP, $price, $quantity, $min_quantity, $id)
        {
            if($this->verifyProduct($cod))
            {
                $query = "UPDATE products SET cod = :cod, nameP = :nameP,price = :price,
                    quantity = :quantity, min_quantity = :min_quantity WHERE id = :id";

                $sql = $this->db->prepare($query);
                $sql->bindValue(":cod", $cod);
                $sql->bindValue(":nameP", $nameP);
                $sql->bindValue(":price", $price);
                $sql->bindValue(":quantity", $quantity);
                $sql->bindValue(":min_quantity", $min_quantity);
                $sql->bindValue(":id", $id);
                $sql->execute();
            }
            else
            {
                return false;
            }
        }

        public function getProduct($id)
        {   
            $array = array();

            $query = "SELECT * FROM products WHERE id = :id";
            $sql = $this->db->prepare($query);
            $sql->bindValue(":id", $id);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $array = $sql->fetch();
            }
            return $array;
        }

        public function getLowQuintityProducts()
        {
            $array = array();
            
            $query = "SELECT * FROM products WHERE quantity < min_quantity";
            $sql = $this->db->query($query);
            if($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll();
            }
            return $array;
        }
    }
?>






