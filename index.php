<?php 
// comentários de linha
# comentário de linha
/* comentário de bloco */

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
$grana = 0

// estrutura de controle de decisão
if(!($teste>0)){
echo('sacar dinheiro! <br>');
}
// estrutura de repetição

// funções e config

// "%2C" na url é virgula.
if(isset($_GET['enviar'])){
    $nome = $_GET['txt-nome'];
    $email = $_GET['txt-email'];
    $data_nasc = $_GET['txt-data-nasc'];
    $dataT = new DateTime($data_nasc);
    $data_nasc = date_format($data, 'd-M-Y');

    $aluno = array('nome'=>$nome,'email'=>$email, 'datan'=>$data_nasc);

    foreach ($aluno as $key => $value) {
        echo('<h3>'.$key.': '.$value.'</h3>');
    }
}


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
  <form action="#" method="GET">
    <label for="txt-nome">
      Nome:
    <input type="text" name="txt-nome" placeholder="digite seu nome..." id="" required>
    </label><br>
    <label for="">
      email:
    <input type="email" name="txt-email" placeholder="digite seu email..." id="" required>
    </label><br>
    <label for="">
      data de nascimento:
    <input type="date" name="txt-data-nasc" id="" required>
    </label><br>


    <button type="submit">Enviar</button>
  </form>
</body>
</html>