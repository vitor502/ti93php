<?php 
include 'config.php';
// comentário de linha
# comentário de linha
/* comentário de bloco */ 

// declaração de variáveis e matrizes - manipulação de data/hr - manipulação de string 
$nome = "Vitorfs";
$dataNasc = date('24/04/2004');
echo($nome.' - '.$dataNasc);
echo('<br>');
$hoje = date('d/m/Y H:i:s');
echo($hoje.'<br>');

$data = new DateTime();
echo('<br>');
//print_r($data);
$hoje = date('d/m/Y H:i:s'); echo($hoje.'<br>');
$hoje = date('d-M-y H:i:s'); echo($hoje.'<br>');
$hoje = date('D, d M Y'); echo($hoje.'<br>');
$hoje = date('M H:i:s'); echo($hoje.'<br>');
$hoje = date('D-d H:i'); echo($hoje.'<br>');
$teste = true;
$idade = 35;
$valor = 458.65;
$grana = 0;
// estrutura de controle de decisão
if (!($grana>0)) { // caso retorne verdadeiro
    echo('Sacar grana!<br>');
}
// estrutura de repetição


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu PHP</title>
</head>
<body>
    <form action="opform.php" method="post" name="frm-aluno">
    <label for="txt-nome">
        Nome:
          <input type="text" name="txt-nome" placeholder="digite o Nome..." required maxlength="12">  
    </label> <br>   
    <label for="">
        Email:
        <input type="email" name="txt-email" placeholder="digite o email..." required>
    </label><br>
     <label for="">
        Data Nascimento:
        <input type="date" name="txt-data-nasc" required>
     </label><br>
        <button type="submit" name=enviar>Enviar</button>
    </form>
</body>
</html>