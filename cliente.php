<?php 
include 'conecta.php';
//criando a consulta SQL
$consultaCliSql = "SELECT * FROM cliente ORDER BY nome ASC, cod_cliente ASC";

//buscando e listando os dados da tabela (conpleta)
$lista = $conn->query($consultaCliSql);

//separar em linhas
$row = $lista->fetch();
print_r($row);
    
//retornando o númaru de linhas
$num_rows = $lista->rowCount();

if(isset($_POST['bt-enviar']))
{
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $insertSql = "insert cliente (nome, cpf) values('$nome','$cpf')";
    $resultado = $conn->query($insertSql);
    header('location: cliente.php');
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes (<?php echo $num_rows?>)</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estyle.css">
</head>
<body class="bg-dark">

    <div class="container bg-Secondary border">
        <header class="text-Light">
            <h1>Cadastro de Clientes</h1>
        </header>

    <table class="table table-dark table-striped text-center">
        <thead>
            <th>Cod</th>
            <th>Nome</th>
            <th>CPF</th>
        </thead>
        <tbody>
            <?php do {?>
                <tr>
                    <td><?php echo $row['cod_cliente'];?></td>
                    <td><?php echo $row['nome'];?></td>
                    <td><?php echo $row['cpf'];?></td>
                </tr>
            <?php } while ($row = $lista->fetch())?>
        </tbody>
    </table>
        <form action="#" method="post" class="text-Light">
            <div hidden>
                <label for="cod">Código
                    <input class="campo form-control" type="text" name="cod" id=""></label>
            </div>
            <div class="campo">
                <label for="nome">Nome
                    <input class="campo form-control" type="text" name="nome" id=""></label>
            </div>
            <div class="campo">
                <label for="cpf">CPF
                    <input class="campo form-control" type="number" name="cpf" id=""></label>
            </div>
            <div class="campo">
                <button class="btn btn-primary" type="reset" name="bt-enviar">Enviar</button>
            </div>
        </form>
        </div>
</body>
    <script src="js/bootstrap.min.js"></script>
</html>