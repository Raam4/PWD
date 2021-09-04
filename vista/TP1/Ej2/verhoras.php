<?php
if ($_GET){
    $array = [];
    $total = 0;
    foreach($_GET as $dia){
        if($dia != null){
            array_push($array, $dia);
            $total += (int)$dia;
        }else{
            array_push($array, 0);
        }
    }
    print_r($array);
    echo "<br /><h3>En total se cursan " . $total . " horas por semana.</h3><br />";
}else{
    echo "No se recibieron datos.";
}
?>