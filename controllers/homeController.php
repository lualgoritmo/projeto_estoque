<?php
    class homeController extends Controller {

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
                    BASE_URL.'home/add' => 'Adicionar Produto',
                    BASE_URL.'relatorio' => 'Estoque',
                    BASE_URL.'sale' => 'Adicionar Venda',
                    BASE_URL.'sold' => 'Relatório de Venda',
                    BASE_URL.'login/sair' => 'Sair'
                )
            );
            $produt = new Products();
            $source = '';

            if(!empty($_GET['busca']))
            {
                $source = $_GET['busca'];
            }

            $data['list'] = $produt->getProducts($source);
            
            $this->loadTemplate('home', $data);
        }

        public function add()
        {
            $data = array(
                'menu'=> array(
                    BASE_URL.'home/add' => 'Adicionar Produto',
                    BASE_URL.'relatorio' => 'Estoque',
                    BASE_URL.'sale' => 'Adicionar Venda',
                    BASE_URL.'sold' => 'Relatório de Venda',
                    BASE_URL =>'Voltar',
                    BASE_URL.'login/sair' => 'Sair'
                )
            );
            $product = new Products();

            if(!empty($_POST['cod']))
            {
                $cod = $_POST['cod'];
                $nameP = $_POST['nameP'];
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $min_quantity = $_POST['min_quantity'];

                $product->addProducts($cod, $nameP, $price, $quantity, $min_quantity);
                header("Location:".BASE_URL);
                exit;
            }

            $this->loadTemplate('add', $data);
        }

        public function edit($id)
        {   
            $data = array(
                'menu' => array(
                    BASE_URL =>'Voltar'
                )
            );
            $product = new Products();
            
            if(!empty($_POST['cod']))
            {
                $cod = $_POST['cod'];
                $nameP = filter_input(INPUT_POST, 'nameP');
                //$price = filter_input(INPUT_POST, 'price');
                $price = str_replace('.','',$price);
                $price = str_replace(',','.',$price);
                $price = $_POST['price'];
                $quantity = $_POST['quantity'];
                $min_quantity = $_POST['min_quantity'];
                if($cod && $nameP && $price && $quantity && $min_quantity)
                {
                    $product->editProduct($cod, $nameP, $price, $quantity, $min_quantity, $id);
                    header("Location:".BASE_URL);
                }
                else 
                {
                    $data['warning'] = 'Digite os campos corretamente';
                }
            }

            $data['info'] = $product->getProduct($id);

            $this->loadTemplate('edit', $data);
        }
    }   






