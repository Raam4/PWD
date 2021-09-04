<?php
if($_GET){
    if((int)$_GET['edad'] >= 18){
        echo "<p>Hola, yo soy ".$_GET['nombre']." ".$_GET['apellido'].", tengo ".$_GET['edad']." años y vivo en ".$_GET['direccion'].".<p>";
    }else{
        echo "<p>Hola, yo soy ******, tengo ".$_GET['edad']." años y vivo en *******.<p>";
    }
}else{
    echo "No se recibieron datos.";
}
?>