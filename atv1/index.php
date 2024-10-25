<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar Livros</title>
</head>
<body>
<h1>Cadastre o livro</h1>
<br>
<form action="cadastrar.php" method="post">
    <label>Insira o titulo:</label> <br>
    <input type="text" name="titulo_digitado" required placeholder="Insira aqui"> <br><br>

    <label>Insira o autor :</label><br>
    <input type="text" name="autor_digitado" required placeholder="Insira aqui"> <br><br>

    <label>Ano publicado:</label> <br>
    <input type="text" name="ano_digitado" required placeholder="Insira aqui"> <br><br>

    <label>Categoria:</label><br>
    <input type="text" name="categoria_digitada" required placeholder="Insira aqui"> <br><br>

   
    <button type="submit">Cadastrar</button>
</form>
</body>
</html>

<!-- 
Código SQL:---------------------------------------------------------------------

CREATE DATABASE bd_senai_atv_01;
USE bd_senai_atv_01;
CREATE TABLE tb_livros (
id_livro INT AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(255) NOT NULL,
autor VARCHAR(255) NOT NULL,
ano_publicacao INT NOT NULL,
categoria VARCHAR(100)
);

SELECT * FROM tb_livros;

 -->