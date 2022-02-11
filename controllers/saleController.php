<?php

    class saleController extends Controller
    {
        private $user;

        public function __construct()
        {   parent:: __construct();

            $this->user = new Users();

            if(!$this->user->checkLogin())
            {
                header("Location:".BASE_URL."login");
                exit;
            }
        }

        
        public function index() {
            $data = array(
                'menu'=> array
                (
                    BASE_URL =>'Início',
                    BASE_URL.'home/add' => 'Adicionar Produto',
                    BASE_URL.'relatorio' => 'Estoque',
                    BASE_URL.'sale' => 'Adicionar Produto',
                    BASE_URL.'sold' => 'Relatório de Venda',
                    BASE_URL.'login/sair' => 'Sair'
                )
            );
 
            $sale = new Sales();

            if(!empty($_POST['cod']))
            {
                $cod = $_POST['cod'];
                $nameP = $_POST['nameP'];
                $date_sale = $_POST['date_sale'];
                $price_sale = $_POST['price_sale'];
                $sale_discount = $_POST['sale_discount'];
          
                $sale->insertSale($cod, $nameP, $date_sale, $price_sale, $sale_discount);
                exit;
            }
            $this->loadTemplate('sale', $data);
        }
    }

      

               

           
      







?>





