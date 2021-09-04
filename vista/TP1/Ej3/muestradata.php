<?php
if($_GET){
    echo "<p>Hola, yo soy ".$_GET['nombre']." ".$_GET['apellido'].", tengo ".$_GET['edad']." años y vivo en ".$_GET['direccion'].".<p>";
}else{
    echo "No se recibieron datos.";
}
?>