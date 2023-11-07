<?php
require 'config.php';

$lista = array();

$query = "SELECT * FROM usuario";
$sql   = $pdo->query($query);

if($sql->rowCount() > 0){

    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Usuários</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>ID de Usuário</th>
                    <th>Nome do Usuário</th>
                    <th>E-mail do Usuário</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($lista as $usuario):?>
                    <tr>
                        <td><?=$usuario['id'];?></td>
                        <td><?=$usuario['nome']?></td>
                        <td><?=$usuario['email']?></td>
                        <td>
                            <a href="Editar/editar.php?id=<?=$usuario['id'];?>" class="btn btn-primary">Editar</a>
                            <a href="Excluir/excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?');" class="btn btn-danger">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="Cadastro/cadastro.php" class="btn btn-success">Cadastrar Usuário</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
