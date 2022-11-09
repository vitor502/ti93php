<?php 
    // dados vindos do formulario (frm-aluno) de index.php
if(isset($_post['enviar'])){
    $nome = $_post['txt-nome'];
    $email = $_post['txt-email'];
    $data_nasc = $_post['txt-data-nasc'];
    $dataT = new DateTime($data_nasc);
    $data_nasc = date_format($data, 'd-M-Y');
    $aluno = array('nome'=>$nome,'email'=>$email, 'datan'=>$data_nasc);
    //chamada para gravar dados na tabela do banco
    
    //header('locatio: index.php');
}

 ?>
 <a href="index.php">Voltar</a>
 <script> window.alert("Foi tudo bem")</script>
 