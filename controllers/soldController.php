<?php

    class  soldController extends Controller
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
        
        public function index()
        {
            $data = array(
                'menu'=> array(
                    BASE_URL =>'Início',
                    BASE_URL.'home/add' => 'Adicionar Produto',
                    BASE_URL.'relatorio' => 'Estoque',
                    BASE_URL.'sale' => 'Adicionar Venda',
                    BASE_URL.'sold' => 'Relatório de Vendas',
                    BASE_URL.'login/sair' => 'Sair'
                )
            );
          
            $sold = new Sales();
            $data['list'] = $sold->getSold();
            //$total = $sold->totalValue();
            //var_dump($total);
            $this->loadTemplate('sold', $data);
        }
    }
?>