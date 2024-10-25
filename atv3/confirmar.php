<?php
// confirmar.php
$id_veiculo = $_GET['id'];
echo "
    <h1>Tem certeza que deseja excluir o veículo com ID $id_veiculo?</h1>
    <br><br>
    <a href='deletar.php?id=$id_veiculo'>Sim</a>
    <br><br>
    <a href='pagina_gerenciar.php'>Não</a>
";
?>
