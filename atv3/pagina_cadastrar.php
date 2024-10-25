<?php 
include "verificar_logado.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Veículo</title>
    <link rel='stylesheet' href='estilo.css'> 
</head>
<body>
    <h1>Cadastre seu veículo!</h1>
    <br>
    <form action="cadastrar_veiculo.php" method="post">
        <label>Modelo:</label><br>
        <input type="text" name="modelo_digitado" > <br><br>

        <label>Placa:</label><br>
        <input type="text" name="placa_digitada" > <br><br>

        <label>Ano:</label><br>
        <input type="number" name="ano_digitado" > <br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco_digitado" > <br><br>

        <button type="submit">Cadastrar Veículo</button>
    </form>
</body>
</html>
