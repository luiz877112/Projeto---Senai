<?php
include "conexao.php"; 

include "verificar_logado.php";


$codigo = $_GET['id'];

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_veiculos WHERE id_veiculo = $codigo";

// 2º Passo - Preparar a conexão
$consultar = $pdo->prepare($sql);


// 3º Passo - Tentar executar
try {
    $consultar->execute();
    $resultado = $consultar->fetch(PDO::FETCH_ASSOC);
    $modelo = $resultado['modelo'];
    $placa = $resultado['placa'];
    $ano = $resultado['ano'];
    $preco = $resultado['preco'];

} catch (PDOException $erro) {
    echo "Falha ao consultar! " . $erro->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veículo</title>
    <link rel='stylesheet' href='estilo.css'> 
</head>
<body>
    <h1>Atualizar Veículo</h1>
    <br>
    <form action="atualizar.php" method="post">
        <input type="text" name="codigo" value='<?php echo $codigo; ?>' hidden> <br>
        
        <label>Modelo:</label><br>
        <input type="text" name="modelo_digitado" value='<?php echo $modelo; ?>'> <br><br>

        <label>Placa:</label><br>
        <input type="text" name="placa_digitada" value='<?php echo $placa; ?>'> <br><br>

        <label>Ano:</label><br>
        <input type="number" name="ano_digitado" value='<?php echo $ano; ?>'> <br><br>

        <label>Preço:</label><br>
        <input type="number" step="0.01" name="preco_digitado" value='<?php echo $preco; ?>'> <br><br>

        <button type="submit">Salvar</button>
    </form>
</body>
</html>
