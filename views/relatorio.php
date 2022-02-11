<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Estoque</title>
    
</head>
<body>
    <h1>Relatório</h1>
    <!--<button id="pdf">Gerar PDF</button>-->
    <table width="100%">
        <tr>
            <th>Nome do Produto</th>
            <th>Quantidade</th>
            <th>Minímo Quantidade</th>
            <th>Diferença</th>
        </tr>
            <?php foreach($list as $item):?>
                <tr>
                    <td><?php echo $item['nameP'];?></td>
                    <td><?php echo $item['quantity'];?></td>
                    <td><?php echo $item['min_quantity'];?></td>
                    <td><?php echo (floatval($item['min_quantity'])-floatval($item['quantity']));?></td>
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