<?php

    try{
    $db_name = 'crud';
    $host    = 'localhost';
    $db_user = 'root';
    $db_password = "1234";

    $pdo = new PDO("mysql:dbname=$db_name;host=$host",$db_user,$db_password);
    }catch(PDOException $error){

        echo "ERRO: Problemas ao se conectar ao banco de dados: ".$error->getMessage();
    }
