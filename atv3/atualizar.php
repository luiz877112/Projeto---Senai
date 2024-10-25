<?php

include "conexao.php"; 

$codigo = $_POST['codigo']; 
$modelo = $_POST['modelo_digitado']; 
$placa = $_POST['placa_digitada']; 
$ano = $_POST['ano_digitado'];
$preco = $_POST['preco_digitado'];

// 1º Passo - Comando SQL para atualizar os dados do veículo
$sql = "UPDATE tb_veiculos SET
        modelo = '$modelo',
        placa = '$placa',
        ano = '$ano',
        preco = '$preco'
        WHERE id_veiculo = '$codigo'";

// 2º Passo - Preparar a conexão
$atualizar = $pdo->prepare($sql);


// 3º Passo - Tentar executar
try {
    $atualizar->execute();
    if ($atualizar->rowCount() >= 1) {
        echo "Veículo atualizado com sucesso!";
    } else {
        echo "Falha ao atualizar o veículo!";
    }

    echo "<br> <a href='pagina_gerenciar.php'> Voltar </a>";
} catch (PDOException $erro) {
    echo "Falha ao atualizar! " . $erro->getMessage();
}
?>
