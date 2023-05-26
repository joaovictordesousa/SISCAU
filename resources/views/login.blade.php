<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="icon" href="img/logoicon.jpg">
    <title>SISCAU</title>
   
</head>
<body>
    <div class="container_login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="Text" name="nome-sobrenome" placeholder="Nome e Sobrenome">
            <br><br>
            <input type="Password" name="senha" placeholder="Senha">
            <br><br>
            <a class="ResetPassword" href="#">Esqueci minha senha</a>
            <br><br>
            <input class="InputSubmit" type="submit" name="submit" value="Entrar">
            <br>
            
        </form>
    </div>
</body>
</html>
