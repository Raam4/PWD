<?php
if($_POST){
    if($_POST['edad'] < 12){
        $precio = 160;
    }elseif($_POST['edad'] >= 12 && $_POST['estudiante'] == 'Si'){
        $precio = 180;
    }else{
        $precio = 300;
    }
    echo "<p>Datos: ".$_POST['nombre']." ".$_POST['apellido'].", ".$_POST['edad']." años. ".$_POST['direccion'].". ".$_POST['estudiante']." es estudiante.</p>";
    echo "<p>Precio de Entrada $".$precio."</p>";
}else{
    echo "No se recibieron datos.";
}
?>

<form id="form_data" name="form_data" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <ul>
        <li>Nombre: <input type="text" id="nombre" name="nombre"></li>
        <li>Apellido: <input type="text" id="apellido" name="apellido"></li>
        <li>Edad: <input type="number" id="edad" name="edad"></li>
        <li>Direccion: <input type="text" id="direccion" name="direccion"></li>
        <li>Estudiante:
            <label><input type="radio" name="estudiante" value="Si">SI</label>
            <label><input type="radio" name="estudiante" value="No">NO</label>
        </li>
    </ul>
    <button id="cln" type="reset">Limpiar</button>
    <button id="btn" type="submit">Enviar</button>
</form>