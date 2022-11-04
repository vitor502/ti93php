<?php 

    $times = array();
    $times[0] = "paumeiras";
    $times[1] = "paumeira";
    $times[2] = "paumeir";


  echo("<br>");
  print_r($times);
  echo("<br>");
  foreach ($times as $time){
    echo($time. "<br>");
  }

?>
<table>
    <th>Id</th>
    <th>Nome</th>
    <?php foreach ($times as $id => $nome) { ?>
        <tr>
            <td><?php echo($id + 1);?></td>
            <td><?php echo($nome);?></td>
        </tr>
    <?php } ?>
</table>