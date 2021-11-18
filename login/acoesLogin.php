<?php

session_start();

require("../database/conexao.php");

####   FUNÇÕES DE LOGIN/LOGOUT   ####

function realizarLogin($usuario, $senha, $conexao) {
    
    $sql = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario'";

    $resultado = mysqli_query($conexao, $sql);

    $dadosUsuario = mysqli_fetch_array($resultado);

    echo password_hash($senha, PASSWORD_DEFAULT);

    if (isset($dadosUsuario["usuario"]) && isset($dadosUsuario["senha"])  && password_verify($senha, $dadosUsuario["senha"])) {

        $_SESSION["usuarioId"] = $dadosUsuario["idAdministrador"];
        $_SESSION["nome"] = $dadosUsuario["nome"];

        header("location: ../listagem/index.php");

    } else {
        echo 'DEU RUIM';
    }

   
}

switch ($_POST["acao"]) {
    case 'login':
        //shift + alt + down = copia e cola na linha de baixo
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        realizarLogin($usuario, $senha, $conexao);

        // header("location: ../listagem/index.php");

        break;

    case 'logout':

        session_destroy();

        header("location: ../login/index.php");
    
    default:
        header("location: ../login/index.php");
}