<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>CADASTRO</h1>
    </div>
    <p>

        <a href="cadastromoto.php" class="btn btn-primary">Cadastro moto</a>
        <br><br>
        <a href="visualizarmoto.php" class="btn btn-primary">Motos cadastradas</a>
        <br><br>
        <a href="cadastrocarro.php" class="btn btn-primary">Cadastro carro</a>
        <br><br>
        <a href="visualizarcarro.php" class="btn btn-primary">Carros cadastrados</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair</a>
    </p>
</body>
</html>