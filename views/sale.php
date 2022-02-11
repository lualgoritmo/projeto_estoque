<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Vendas de Produtos</title>
</head>
<body>
<h1>Adicionar Venda</h1>
    <!--<a href="<?php echo BASE_URL;?>">Voltar</a><br/><br/>-->
    <form method="POST" class="form">
        <label id="cod">Código </label><br/>
            <input type="text" name="cod" required /><br/><br/>
        <label id="cod">Nome do Produto </label><br/>
            <input type="text" name="nameP" required /><br/><br/>
        <label id="cod">Preço </label><br/>
            <input type="text"  class="dinheiro" name="price_sale" " required /><br/><br/>
        <label id="cod">Desconto de Venda</label><br/>
            <input type="text"  class="discount" name="sale_discount" required /><br/><br/>
            <label id="cod">Data de Venda</label><br/>
            <input type="date"  class="date_sale" name="date_sale" required /><br/><br/>
        
            <button type="submit">Atualizar Venda</button>
        
    </form>
</body>
</html>