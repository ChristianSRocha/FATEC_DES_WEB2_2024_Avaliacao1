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

    if(!file_exists("dadoscarro.txt")){
        $handle = fopen("dadoscarro.txt", "w");
    } else {
        $handle = fopen("dadoscarro.txt", "a");
    }

    fwrite($handle, $_POST['nome']." | ");
    fwrite($handle, $_POST['ra']." | ");
    fwrite($handle, $_POST['placa']."\n");
    fclose($handle);
    
    $handle = fopen("dadoscarro.txt", "r");
    while (!feof($handle)) {
            $line = fgets($handle);
            echo $line ."<br>";
        }
    fclose($handle);

?>
        <a href="cadastrocarro.php" class="btn btn-primary">Voltar</a>
</body>
</html>