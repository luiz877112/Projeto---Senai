<?php
include "conexao.php";
$id_veiculo = $_GET['id'];

// 1º Passo - Comando SQL para deletar o veículo pelo ID
$sql = "DELETE FROM tb_veiculos WHERE id_veiculo = '$id_veiculo'";

// 2º Passo - Preparar a conexão e a query
$deletar = $pdo->prepare($sql);

// 3º Passo - Tentar executar
try{
    $deletar->execute();
    echo "Deletado com sucesso!";
}catch(PDOException $erro){
    echo "Falha ao deletar! ".$erro->getMessage();
}
?>
