<?php 
//Declaração de variaveis, matrizes e manipulação de data/hr manipulação de 
// - definindo o timezone -
date_default_timezone_set('America/Sao_Paulo');
$nome = "vitorfs";
$dataNasc = date('24/02/2004');
echo($nome.' - '. $dataNasc);
echo('<br>');
$hoje = date ('d/m/Y H:i:s');
echo($hoje. '<br>');
echo('<br>');
$data = new DateTime();
echo('<br>');
//print_r($data);

$teste = true;
$idade = 35;
$valor = 458.65;

$nome = $_POST['valor-txt'];
echo('<h1>'. $nome. '<h1>');

//Estrutura de controle de decisão

//Estrutura de repetição

//Funções e configuração
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- <meta http-equiv="refresh" content="30"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="#" method="post"><input type="text" name="valor-txt" placeholder="digite o valor" id="">
    <button type="submit">enviar</button>
  </form>
</body>
</html>