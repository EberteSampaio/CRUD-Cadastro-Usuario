<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
        <h1 class="text-light">Cadastro de Usuário</h1>
        <form action="cadastro_action.php" method="POST">
            <div class="form-group">
                <label for="nome" class="text-light">Forneça o Nome:</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="form-group">
                <label for="email" class="text-light">Forneça seu E-mail:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
