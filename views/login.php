<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/login.css" />
    <title>Login</title>
</head>
<body>
    <div class="loginArea">
        <form method="POST">
            <p>
                Número<br/>
                <input type="text" name="number" />
            </p>
            <p>
                Senha<br/>
                <input type="password" name="password" />
            </p>

            <input type="submit" value="Enviar" />
        </form>
    </div>
    <?php if(!empty($msg)):?>
        <h2><?php echo $msg;?></h2>
    <?php endif;?>
</body>
</html>

