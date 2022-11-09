<?php 
include 'congig.php';



//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// declaração de variáveis e matrizes - manipulação de data/hr - manipulação de string
$nome = "Vitorfs502";
$dataNasc = date('2004/02/24');
echo($nome.' - '. $dataNasc);
echo('<br>');
$hoje = date('d/m/Y H:i:s');
echo($hoje. '<br>');



// definindo timezone
date_default_timezone_set('America/Sao_Paulo');

$data = new DateTime();
echo('<br>');



//print_r($data);
$hoje = date('d/m/Y H:i:s');
echo('<br>');
$hoje = date('d-M-y H:i:s');
echo('<br>');
$hoje = date('D, d M Y H:i:s');
echo('<br>');
$hoje = date('M H:i');
echo('<br>');
$hoje = date('D-d H:i');
$teste = true;
$idade = 35;
$valor = 458.65;
$grana = 0;



// estrutura de controle de decisão
if(!($teste>0)){
echo('sacar dinheiro! <br>');
}



// estrutura de repetição


?>
<!-- --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <!-- <meta http-equiv="refresh" content="5"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <!-- Ação do formularo -->
    <form action="opform.php" method="post" name="frm-aluno">
      <label for="txt-nome">
        Nome:
          <input type="text" name="txt-nome" placeholder="digite seu nome..." id="" required>
          </label><br>
      <label for="">
        Email:
          <input type="email" name="txt-email" placeholder="digite seu email..." id="" required>
          </label><br>
      <label for="">
        Data de Nascimento:
          <input type="date" name="txt-data-nasc" id="" required>
          </label><br>
          <button type="submit" name="enviar">Enviar</button>
    </form>

  </body>
</html>