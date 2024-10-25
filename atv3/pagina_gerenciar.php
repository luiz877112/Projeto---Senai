
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciar Veículos</title>
    <link rel='stylesheet' href='estilo.css'> 
</head>
<body>
    <h1>Veículos cadastrados</h1>
    <form action="" method="get">
        <input type="text" 
               name="palavra_pesquisada"
               placeholder="Digite um termo para pesquisar"
               size="60">
        <button type="submit">🔎 Pesquisar</button>
    </form>

    <div id="veiculos">
        <?php
        include "conexao.php"; 
        include "verificar_logado.php";

        $sql = "SELECT * FROM tb_veiculos";

        if (isset($_GET['palavra_pesquisada'])) {
            $termo = $_GET['palavra_pesquisada'];
            $sql = "SELECT * FROM tb_veiculos
                    WHERE modelo LIKE '%$termo%' OR placa LIKE '%$termo%'";
        }

        $consultar = $pdo->prepare($sql);

        try {
            $consultar->execute();
            if ($consultar->rowCount() == 0) {
                echo "Nenhum veículo encontrado.";
            } else {
                $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
                foreach ($resultados as $item) {
                    $id_encontrado = $item['id_veiculo'];
                    $modelo_encontrado = $item['modelo'];
                    $placa_encontrada = $item['placa'];
                    $ano_encontrado = $item['ano'];
                    $preco_encontrado = $item['preco'];
                    
                    echo "
                        <div class='cartoes'>
                            Cod. do veículo: $id_encontrado <br>
                            Modelo: $modelo_encontrado <br>
                            Placa: $placa_encontrada <br>
                            Ano: $ano_encontrado <br>
                            Preço: R$ $preco_encontrado <br><br>
                            <a href='formulario_editar.php?id=$id_encontrado'>
                                <button>✏️ Editar</button>
                            </a>
                            <a href='confirmar.php?id=$id_encontrado'>
                                <button>🗑️ Deletar</button>
                            </a>
                        </div>
                    ";
                }
            }
        } catch (PDOException $erro) {
            echo "Falha ao consultar: " . $erro->getMessage();
        }
        ?>
    </div>
</body>
</html>
