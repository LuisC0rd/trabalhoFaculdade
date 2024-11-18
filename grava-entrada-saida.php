<?php
    include_once('./private/config/db/conn.php');

    // Criar variavel para armazenar a 'marca'
    $dia = $_POST['dia'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    
    // Crair uma variavel com o Query 'comando em SQL' para gravar no banco de dados
    $sql = "INSERT INTO tbentrada_saida (dia, entrada, saida) VALUES ('$dia', '$entrada', '$saida')";

    $exc = $conn->query($sql);
    
    if($exc){
        $resp = "<br><h1>Horario de entrada e saida ja cadastrado</h1>";
    }
    else{
        $resp = "ERRO<br>";
        $resp = $resp. $conn->connect_error;
    }

    echo $resp;

    header("Location: frequencia.php");
?>
<br>
<a href="frequencia.php">Voltar</a>
