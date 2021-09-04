<?php
if($_GET){
    if((int)$_GET['edad'] >= 18){
        echo "<p>Hola, yo soy ".$_GET['nombre']." ".$_GET['apellido'].", tengo ".$_GET['edad']." años y vivo en ".$_GET['direccion'].".<p>";
    }else{
        echo "<p>Hola, yo soy ******, tengo ".$_GET['edad']." años y vivo en *******.<p>";
    }
    if($_GET['estudios']=='none'){
        echo "<p>No tengo estudios.<p>";
    }else{
        echo "<p>Tengo estudios ".$_GET['estudios'].".";
    }
    echo "<p>Sexo ".$_GET['sexo'].".";
    if(!empty($_GET['deporte'])){
        echo "<p>Deportes que practica: ".count($_GET['deporte']).".";
    }else{
        echo "<p>Deportes que practica: 0";
    }
}else{
    echo "No se recibieron datos.";
}
?>