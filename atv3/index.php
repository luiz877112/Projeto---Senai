<?php
include "verificar_logado.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='estilo.css'> 
</head>
<body>
    <?php include "menu_topo.php"; ?>
    <iframe src="pagina_inicial.php" id="conteudo" name="conteudo">
    </iframe>
    <?php include "rodape.php"; ?>
</body>
</html>

<!-- 
    Código SQL:

    CREATE DATABASE bd_locadora_carro;

USE bd_locadora_carro;

CREATE TABLE tb_veiculos (
    id_veiculo INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(50) NOT NULL,
    placa VARCHAR(10) NOT NULL UNIQUE,
    ano INT NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);

CREATE TABLE tb_usuarios (
    id_usuarios INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);
INSERT INTO tb_usuarios (usuario, senha)
VALUES ('Luiz', '1234');
 -->