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
        body{ font: 14px sans-serif;  text-align:center}
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<?php

if (!file_exists("dadosmoto.txt")) {
    echo "Não existe moto cadastrada!"."<br>";
} else {
    $handle = fopen("dadosmoto.txt", "r");
    while (!feof($handle)) {
        $line = fgets($handle);
        echo $line . "<br>";
    }
    fclose($handle);
}  

?>
        <a href="welcome.php" class="btn btn-primary">Voltar</a>
</body>
</html>