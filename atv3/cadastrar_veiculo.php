<?php
include "conexao.php"; 

$modelo = $_POST['modelo_digitado'];
$placa = $_POST['placa_digitada'];
$ano = $_POST['ano_digitado'];
$preco = $_POST['preco_digitado'];

// 1º Passo - Comando SQL
$sql = "INSERT INTO tb_veiculos (modelo, placa, ano, preco) VALUES 
('$modelo', '$placa', '$ano',' $preco')";
$consulta = $pdo->prepare($sql);

// 2º Passo - Preparar a conexão
$inserir = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $inserir->execute();
    echo "Cadastrado com sucesso"; 
}catch(PDOException $erro){
    echo "Falha ao inserir!". $erro->getMessage();
}
?>
<html>
    <link rel="stylesheet" href="estilo.css">
</html>