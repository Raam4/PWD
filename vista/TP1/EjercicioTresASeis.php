<?php 
$Titulo = "Ejercicio 3";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card border rounded shadow fw-bold pt-1">
                <form class="ms-2 mb-3" id="datapers" name="datapers" method="POST" action="accionTresASeis.php" data-toggle="validator" enctype="multipart/form-data" novalidate>
                    <h4>Ingrese sus datos</h4>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input class="form-control" type="number" id="edad" name="edad" placeholder="Edad" required>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion" required>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-select" name="genero" required>
                                    <option selected value="">Seleccionar género...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 my-3">
                        <p>Nivel de estudios: </p>
                        <div class="form-group">
                                <label class="radio me-2">
                                    <input type="radio" name="estudios" id="none" value="none" required> Sin estudios
                                </label>
                                <label class="radio me-2">
                                    <input type="radio" name="estudios" id="primario" value="Primario" required> Primario
                                </label>
                                <label class="radio me-2">
                                    <input type="radio" name="estudios" id="secundario" value="Secundario" required /> Secundario
                                </label>
                        </div>
                    </div>
                    <div class="row pe-2 mb-3">
                        <p>Deportes que practica:</p>
                        <div class="input-group">
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" name="deporte[]" value="Futbol" id="futbol">
                                <label class="form-check-label" for="futbol">
                                    Futbol
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" name="deporte[]" value="Basket" id="basket">
                                <label class="form-check-label" for="basket">
                                    Basket
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" name="deporte[]" value="Tenis" id="tenis">
                                <label class="form-check-label" for="tenis">
                                    Tenis
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="checkbox" name="deporte[]" value="Voley" id="voley">
                                <label class="form-check-label" for="voley">
                                    Voley
                                </label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>