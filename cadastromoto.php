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
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<h2>CADASTRAR</h2>
<div class="wrapper">
<form action="dadosmoto.php" method="post">
            <div class="form-group">
                <label>NOME</label>
                <input name="nome" class="form-control">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>RA</label>
                <input name="ra" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label>PLACA</label>
                <input name="placa" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
                <a href="welcome.php" class="btn btn-primary">Voltar</a>
            </div>
</form>
</div>
</body>
</html>
