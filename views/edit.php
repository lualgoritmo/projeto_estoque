<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/template.css" />
    <title>Editar Produtos</title>
</head>
<body>
<h1>Editar Produto</h1>
<!--<a href="<?php echo BASE_URL;?>">Voltar</a><br/><br/>-->
    <?php if(!empty($warning)):?>
            <div class="warning">
                <?php echo $warning;?>
            </div>
        <?php endif;?>
    <form method="POST" class="form">
        <label id="cod">Código </label><br/>
            <input type="text" name="cod" 
            value= "<?php echo $info['cod'];?>"required /><br/><br/>
        <label id="cod">Nome do Produto </label><br/>
            <input type="text" name="nameP"
            value= "<?php echo $info['nameP'];?>" required /><br/><br/>
        <label id="cod">Preço </label><br/>
            <input type="text" name="price" 
            value= "<?php echo number_format($info['price'],2,',','.');?>" required /><br/><br/>
        <label id="cod">Quantidade </label><br/>
            <input type="text" name="quantity" 
            value= "<?php echo number_format($info['quantity'],2,',','.');?>" required /><br/><br/>
        <label id="cod">Minímo de Quantidade </label><br/>
            <input type="text" name="min_quantity" 
            value= "<?php echo number_format($info['min_quantity'],2,',','.');?>" required /><br/><br/>
        
            <input type="submit" value="Salvar Alteração" />
        
    </form>
</body>
</html>