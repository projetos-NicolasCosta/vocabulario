<?php
    // Dados do SGBD MySQL para a conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "vocabulario";

    // Criando a conexão
    $conexao = new MySQLi($servidor, $usuario, $senha, $banco);

    // Checando a conexão
    if ($conexao->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
?>