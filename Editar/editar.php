<?php
    require '../config.php';

    $usuario = array();
    $id      = filter_input(INPUT_GET, 'id');

     if($id){
        $query = "SELECT * FROM usuario WHERE id = :id";

        $sql = $pdo->prepare($query);
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            
            $usuario = $sql->fetch(PDO::FETCH_ASSOC);

        }else{
            header("Location: index.php");
            exit;
        }
    }else{
        header("Location: index.php");
        exit;
    }

    ?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
                background-color: #333;
                color: #fff;
            }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Usuário</h1>
        <form action="editar_action.php" method="post">
            <input type="hidden" name="id" value="<?=$usuario['id'];?>">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" name="nome" value="<?=$usuario['nome'];?>">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" name="email" value="<?=$usuario['email'];?>">
            </div>
            <button type="submit" class="btn btn-primary">Alterar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
