<?php
    class relatorioController extends Controller 
    {
        public function __construct()
        {   parent:: __construct();
    
            $this->user = new Users();
    
            if(!$this->user->checkLogin())
            {
                header("Location:".BASE_URL."login");
                exit;
            }
        }

        public function index()
        {
            $data = array(
                'menu' => array(
                    BASE_URL =>'Início',
                    BASE_URL.'home/add' => 'Adicionar Produto',
                    BASE_URL.'relatorio' => 'Estoque',
                    BASE_URL.'sale' => 'Adicionar Venda',
                    BASE_URL.'sold' => 'Relatório de Vendas',
                    BASE_URL.'login/sair' => 'Sair'
                )
            );
            $products = new Products();
            $data['list'] = $products->getLowQuintityProducts();

            $this->loadTemplate('relatorio', $data);
        }
    }


?>



