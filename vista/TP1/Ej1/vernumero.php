
<h2>Resultado</h2>
<?php
    if($_POST){
        $numero = $_POST['number_form'];
        if($numero>0){
            echo "<h3>El número recibido es positivo.</h3><br />";
        }elseif($numero<0){
            echo "<h3>El número recibido es negativo.</h3><br />";
        }else{
            echo "<h3>El número recibido es cero.</h3><br />";
        }
    }else{
        echo "No se recibieron datos.<br />";
    }
?>
<br />
<a href="EjercicioUno.html">Volver</a>