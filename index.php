<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Login Form</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"  rel="stylesheet">
    <link href="css/singin.css" rel="stylesheet">


</head>

<body class="text-center">

<form class="form-signin" action="php/tabela.php" method="post">

    <img class="mb-4" src="images/Logo.png" alt="" width="90" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Conexão</h1>


    <input class="form-control " type="text" name="host"  id="pad" placeholder="Host" required="required">
<!--    <label for="user" class="sr-only"> de email</label>-->
    <input class="form-control" type="text" name="user" id="user" placeholder="Usuário" required="required">
<!--    <label for="porta" class="sr-only">sa de email</label>-->
    <input class="form-control" type="text" name="porta" placeholder="Porta" id="porta">
<!--    <label for="senha" class="sr-only">fas de email</label>-->
    <input class="form-control" type="password" name="senha" placeholder="Senha" id="senha" required="required">
<!--    <label for="banco" class="sr-only">faasw de email</label>-->
    <input class="form-control" type="text" name="banco" placeholder="Banco de Dados" id="banco">
    <button  type="submit" class="btn btn-lg btn-primary btn-block">Conectar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019</p>
</form>


</body>

</html>