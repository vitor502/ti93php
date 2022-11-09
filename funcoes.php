<?php 
    function geraCoeficiente(float $taxa, int $periodo): float{
        return pow((1+($taxa/100)),$periodo)/$periodo;
    }
    
    echo 970 * geraCoeficiente(2.0, 6);
    echo('<br>');
    echo 600 * geraCoeficiente(1.27,12) * 12;
 ?>
