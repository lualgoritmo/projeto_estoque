<?php

    class Sales extends Model
    {
      
        private function verifyProduct($cod)
        {
            return true;
        }
        

        public function getSold()
        {
            $array = array();
            
            $query = "SELECT cod, nameP, date_sale, price_sale, sale_discount FROM sale";
            $sql = $this->db->prepare($query);
            $sql->execute();
           
            if($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll();
            }
            return $array;
        }

        public function insertSale($cod, $nameP, $date_sale, $price_sale, $sale_discount)
        {
            $query = "INSERT INTO sale(cod, nameP, date_sale, price_sale, sale_discount)
                VALUES(:cod, :nameP, :date_sale, :price_sale,:sale_discount)";
                
            if($this->verifyProduct($cod))
            {       
                $sql = $this->db->prepare($query);
                $sql->bindValue(":cod", $cod);
                $sql->bindValue(":nameP", $nameP);
                $sql->bindValue(":date_sale", $date_sale);
                $sql->bindValue(":price_sale", $price_sale);
                $sql->bindValue(":sale_discount", $sale_discount);
                $sql->execute();
                if($sql->rowCount() > 0)
                {
                    echo"<script>alert('Feito')</script>";
                }
            }
            else
            {
                return false;
            }
        }

        
    }
?>






