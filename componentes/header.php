

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SISTEMA DE CADASTRO</title>

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">    

</head>

<body>
    
<?php if (isset($_SESSION["usuarioId"])) { ?>

<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="">
        Cadastro
    </a>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../cadastro">Cadastrar</a>
        </li>

    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../listagem">Listar</a>
        </li>
        
    </ul>

    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <form method="POST" action="../login/acoesLogin.php">
            <input type="hidden" name="acao" value="logout"/>
            <button class="btn btn-danger" type="submit">Sair</button>
        </form>
        </li>
        
    </ul>

    <!-- <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="../login/" onclick="logout()">Sair</a>
        </li>
    </ul>
    <form id="form-logout" style="display:none" method="POST" action="<?= $raiz; ?>/login/acoesLogin.php">
        <input type="hidden" name="acao" value="logout" />
    </form>

    <script lang="javascript">

    function logout() {
        document.querySelector("#form-logout").submit();
    }

    </script> -->

</nav>

<?php } ?>
