<?php
    include 'config.php, index.php';
    $dataAtual = new DateTime();
    
    print_r($dataAtual);
    echo '<br>';
    echo $dataAtual->format('d/m/Y');
    echo '<br>';
    $dias = 30;

    for ($i=1; $i < 3; $i++) { 
        echo $i. '° parcela - '.(new DateTime('+'.$i.'month'))->format('d/m/Y');
        $dias += 30;
        echo '<br>';
    }
    echo '<br>';
    print_r($dataNasc);
    echo '<br>';
    $dataSistema = new DateTime();
    print_r($dataNasc);
    echo '<br>';
    $intervalo = $dataNasc->diff($dataSistema);
    print_r($intervalo);
    echo '<br>';
    echo $intervalo ->format('%y anos, %m meses e %d dias');

 ?>