<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Cadastros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=new-city">Nova Cidade</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=new-state">Novo Estado</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=list-cities">Listar Cidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=list-states">Listar Estados</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include("config.php");
                switch (@$_REQUEST["page"]) {
                    case "new-city":
                        include("new-city.php");
                        break;
                    case "new-state":
                        include("new-state.php");
                        break;
                    case "list-cities":
                        include("list-cities.php");
                        break;
                    case "list-states":
                        include("list-states.php");
                        break;
                    case "save-state":
                        include("save-state.php");
                        break;
                    case "save-city":
                        include("save-city.php");
                        break;
                    case "edit-state":
                        include("edit-state.php");
                        break;
                    case "edit-city":
                        include("edit-city.php");
                        break;
                    default:
                        echo "<h1>Bem-vindos ao Sistema de Cadastro!</h1>";
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>