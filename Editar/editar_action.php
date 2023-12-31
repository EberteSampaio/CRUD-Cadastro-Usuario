<?php
require '../config.php';

$id   = filter_input(INPUT_POST,'id');
$nome = filter_input(INPUT_POST,'nome');
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

if($id && $nome && $email){
    $query ="UPDATE usuario set nome = :nome,
                                email = :email
            WHERE id = :id";

    $sql = $pdo->prepare($query);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':nome',$nome);
    $sql->bindValue(':email',$email);
    $sql->execute();

    header('Location: ../index.php');
    exit;
}else{
    header('Location: ../index.php');
    exit;
}