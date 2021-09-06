<?php 
$Titulo = "Ejercicio 3";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card border rounded shadow fw-bold pt-1">
                <form class="needs-validation ms-2 mb-3" id="datapers" name="datapers" method="POST" action="muestradata.php" novalidate>
                    <h4>Ingrese sus datos</h4>
                    <div class="col pe-2 mt-3">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="number" id="edad" name="edad" placeholder="Edad">
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Direccion">
                        </div>
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