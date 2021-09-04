<form id="form_data" name="form_data" method="GET" action="muestradata.php">
    <ul>
        <li>Nombre: <input type="text" id="nombre" name="nombre"></li>
        <li>Apellido: <input type="text" id="apellido" name="apellido"></li>
        <li>Edad: <input type="number" id="edad" name="edad"></li>
        <li>Direccion: <input type="text" id="direccion" name="direccion"></li>
        <li>Estudios:
            <label><input type="radio" name="estudios" value="none">No posee</label>
            <label><input type="radio" name="estudios" value="primarios">Primarios</label>
            <label><input type="radio" name="estudios" value="secundarios">Secundarios</label>
        </li>
        <li>Sexo:
            <label><input type="radio" name="sexo" value="Masculino">Masculino</label>
            <label><input type="radio" name="sexo" value="Femenino">Femenino</label>
        </li>
        <li>Deportes que practica:
            <label><input type="checkbox" name="deporte[]" value="Futbol">Futbol</label>
            <label><input type="checkbox" name="deporte[]" value="Basket">Basket</label>
            <label><input type="checkbox" name="deporte[]" value="Tenis">Tenis</label>
            <label><input type="checkbox" name="deporte[]" value="Voley">Voley</label>
        </li>
    </ul>
    <button id="btn" type="submit">Enviar</button>
</form>