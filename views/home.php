<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Página ADM</title>
    <style>
        /*fieldset
        #busca
        {
            cursor: pointer;
            outline:transparent;
            width: 60%;
            padding: 10px;
        }*/
    </style>
</head>
<body>
    <h1>Tabela de Produtos</h1>
    <!--<button><a href="<?php BASE_URL;?>home/add/">Adicionar Produto</a></button>
    <br/><br/>
    <button><a href="<?php echo BASE_URL;?>relatorio">Relatório</a></button>
    <br/>
    <button><a href="<?php echo BASE_URL;?>login/sair">Sair</a></button>-->
    <fieldset>
        <form method="GET">
            <input type="text" name="busca" id="busca" 
            value="<?php echo (!empty($_GET['busca']))?
            $_GET['busca']:'';?>"
            placeholder="Digite o código ou nome do produto" />
        </form>
    </fieldset>
    <br/>
    <table border="1" width="100%">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>

        <?php foreach($list as $item):?>
            <tr>
                <td><?php echo $item['cod'];?></td>
                <td><?php echo $item['nameP'];?></td>
                <td>R$ <?php echo number_format($item['price'], 2,',','.');?></td>
                <td><?php echo $item['quantity'];?></td>
                <td>    
                    <a href="<?php BASE_URL;?>home/edit/<?php echo $item['id'];?>">Editar</a>
                </td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
    <script type="text/javascript">
        document.getElementById('busca').focus();
        
    </script>
</html>