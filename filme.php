<?php 
include 'conecta.php';
// criando consulta SQL 
$consultaSql = "SELECT * FROM filme";
// buscando e listando os dados da tabela (completa)
$lista = $conn->query($consultaSql);
// separar em linhas
$row = $lista->fetch();
// retornando o número de linhas
$num_rows = $lista->rowCount();

if(isset($_POST['bt-enviar'])){
    $cod_filme= $_POST['cod_filme'];
    $titulo= $_POST['titulo'];
    $sinopse= $_POST['sinopse'];
    $lancamento= $_POST['lancamento'];
    $pais_origem= $_POST['pais_origem'];
    $duracao= $_POST['duracao'];
    $preco= $_POST['preco'];
    $cod_classificacao= $_POST['cod_classificacao'];
    $insert= "insert filme (cod_filme, titulo, sinopse, lancamento, pais_origem, duracao, preco, cod_classificacao) values('$cod_filme', '$titulo', '$sinopse', '$lancamento', '$pais_origem', '$duracao', '$preco', '$cod_classificacao')";
    $respostaSql= $conn->query($insert);
    header('location: filme.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filmes</title>
    <link rel="stylesheet" href="css/estyle.css">
    <style>
        td{
            border-bottom: 1px solid red;
        }
    </style>
</head>
<body>
<!-- input de dados -->
<form action="#" method="post" class="campo">
        <div hidden>
            <label for="cod_filme"><input type="number" name="cod_filme" id=""></label>
        </div>
        <div class="campo">
            <label for=""></label>
        </div>
        <div class="campo">
            <label for=""></label>
        </div>

    </form>
<!-- output de dados -->
</body>
</html>