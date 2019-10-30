<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="col-lg-10 col-lg-offset-1">
        <ul class="navbar-nav" style="m">
            <li class="nav-item">
                <a class="nav-link" href="#">Conteúdo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informações</a>
            </li>
        </ul>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="col-xs-12">
            <input type="text" class="form-control" id="titulo" placeholder="Digite aqui o título do conteúdo">
        </div>
        <hr>
        <div class="col-xs-12">
            <textarea placeholder="Digite aqui o texto" id="conteudo" class="form-control" rows="20"></textarea>
        </div>
        <div>
            <button type="button" id="btn-plus" class="btn btn-circle btn-xl">+</button>
        </div>
        <hr>
        <div class="col-xs-12">
            <button class="btn left" id="btn-excluir">Excluir</button>
            <button class="btn btn-warning right" id="btn-adicionar">Adicionar</button>
        </div>
    </div>
</body>
</html>
