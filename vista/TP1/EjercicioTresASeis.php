<?php 
$Titulo = "Ejercicio 3";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div class="card border rounded shadow fw-bold pt-1">
                <form class="needs-validation ms-2 mb-3" id="datapers" name="datapers" method="POST" action="accionTresASeis.php" novalidate>
                    <h4>Ingrese sus datos</h4>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group">
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-3">
                            <div class="input-group">
                                <input class="form-control" type="number" id="edad" name="edad" placeholder="Edad">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 mt-3">
                        <div class="col-md-6">
                            <div class="input-group">
                                <select class="form-select" name="genero">
                                    <option selected disabled>Seleccionar género...</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2 mt-3">
                        <div class="input-group">
                            <p>Nivel de estudios: </p>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="estudios" id="none" value="none">
                                <label class="form-check-label" for="none">
                                    Sin estudios
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="estudios" id="primario" value="Primario">
                                <label class="form-check-label" for="primario">
                                    Primario
                                </label>
                            </div>
                            <div class="form-check mx-2">
                                <input class="form-check-input" type="radio" name="estudios" id="secundario" value="Secundario">
                                <label class="form-check-label" for="secundario">
                                    Secundario
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row pe-2">
                        <div class="input-group">
                            <p>Deportes que practica:</p>
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
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>
<?php include_once("../../vista/estructura/footer.php"); ?>