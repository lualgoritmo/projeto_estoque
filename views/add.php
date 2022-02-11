<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Produtos</title>
</head>
<body>
<h1>Adicionar Produto</h1>
    <!--<a href="<?php echo BASE_URL;?>">Voltar</a><br/><br/>-->
    <form method="POST" class="form">
        <label id="cod">Código </label><br/>
            <input type="text" name="cod" required /><br/><br/>
        <label id="cod">Nome do Produto </label><br/>
            <input type="text" name="nameP" required /><br/><br/>
        <label id="cod">Preço </label><br/>
            <input type="text"  class="dinheiro" name="price" " required /><br/><br/>
        <label id="cod">Quantidade </label><br/>
            <input type="text"  class="dinheiro" name="quantity" required /><br/><br/>
        <label id="cod">Minímo de Quantidade </label><br/>
            <input type="text"  class="dinheiro" name="min_quantity" required /><br/><br/>
        
            <button type="submit">Adicionar Produto</button>
        
    </form>
</body>
</html>