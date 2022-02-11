<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Venda</title>
    
</head>
<body>
    <h1>Relatório de Vendas</h1>
    <table width="100%">
        <tr>
            <th>Código</th>
            <th>Nome do Produto</th>
            <th>Preço de Venda</th>
            <th>Valor de Desconto</th>
            <th>Data de Venda</th>
        </tr>
           
            <?php foreach($list as $venda):?>
                <tr>
                    <td><?php echo $venda['cod'];?></td>
                    <td><?php echo $venda['nameP'];?></td>
                    <td><?php echo floatval($venda['price_sale']);?></td>
                    <td><?php echo floatval($venda['sale_discount']);?></td>
                    <td><?php
                            $vendaData = $venda['date_sale']; 
                            $retornoData = new DateTime($vendaData);
                            echo '<b>'.$retornoData->format('d/ m /Y').'</b>';
                        ?></td>
                </tr>
            <?php endforeach;?>
    </table>
</body>
    <script type="text/javascript">
        //window.print();
        /*$pdf = document.querySelector('#pdf');
        $pdf.addEventListener('click',(event) =>
        {   
            event.preventDefault();
            window.print();
        });*/
    </script>
</html>