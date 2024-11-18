<?php
    
    $serverDB = "127.0.0.1:3306";
    $userDB = "root";
    $passwordDB = "";
    $nameDB = "dbentrada_saida"; 

    $conn = @new mysqli(
        $serverDB, $userDB, $passwordDB, $nameDB
    );


    // if($conn->connect_errno){
    //     echo "erro";
    // }else{
    //     echo "Conectado";
    // }
?>