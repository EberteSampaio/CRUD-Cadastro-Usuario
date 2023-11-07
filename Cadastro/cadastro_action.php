<?php

require '../config.php';

    $nome  = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);

    if($nome && $email){

        $query = "SELECT * FROM usuario 
                  WHERE email = :email";

        $sql = $pdo->prepare($query);
        $sql->bindValue(':email',$email);
        $sql->execute();

        if($sql->rowCount() === 0){

            $insert = "INSERT INTO usuario (nome, email) 
                            VALUES (:nome, :email)";

            $sql = $pdo->prepare($insert);
            $sql->bindValue(':nome',$nome);
            $sql->bindValue(':email',$email);
            $sql->execute();

            header("Location: ../index.php");
            exit;

        }else{
            header('location: ../cadastro.php');
        }

    }else{

        header("Location: ../cadastro.php");
        
    }   
    