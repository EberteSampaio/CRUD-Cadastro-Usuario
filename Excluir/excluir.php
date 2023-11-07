<?php

require '../config.php';

$id    = filter_input(INPUT_GET,'id');

if($id){

    $query = "DELETE FROM usuario WHERE id = :id";
    $sql = $pdo->prepare($query);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("location: ../index.php");
    exit;


}else{
    header("location: ../index.php");
}
