<?php

    session_start();

    require("../database/conexao.php");

    switch ($_POST["acao"]) {
        case 'inserir':

             //RECEBIMENTO DOS DADOS:
             $nome = $_POST["nome"];
             $sobrenome = $_POST["sobrenome"];
             $email = $_POST["email"];
             $celular = $_POST["celular"];
 
             //CRIAÇÃO DA INSTRUÇÃO SQL DE INSERÇÃO:
             $sql = "INSERT INTO tbl_pessoa
             (nome, sobrenome, email, celular) 
             VALUES ('$nome', '$sobrenome', '$email', '$celular')";
 
             //EXCUÇÃO DO SQL DE INSERÇÃO:
             $resultado = mysqli_query($conexao, $sql);
 
             //REDIRECIONAR PARA INDEX:
             header('location: index.php');
 
             break;
        case 'deletar':
            $cod_pessoa = $_POST["cod_pessoa"];

            $sqlDelete = "DELETE FROM tbl_pessoa WHERE cod_pessoa = $cod_pessoa";

            $resultadoDelete = mysqli_query($conexao, $sqlDelete);

            header("location: index.php");

        break;

        default:
            # code...
            break;
    }

