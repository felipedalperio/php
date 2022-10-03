<?php

$number = $_POST['fatorial'];
$cont = 0;
$resultado = 1;

echo '<h1>Calculo</h1>';

for ($i=$number; $i >= 1 ; $i--) {
    $resultado *= $i;
    if($i != 1){
        echo $i .'*';
    }else{
        echo $i .' = '.$resultado;
    }
}


?>