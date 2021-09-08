<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card border rounded shadow fw-bold py-3 px-3">
                <form class="needs-validation ms-3" id="operacion" name="operacion" method="POST" action="accionSiete.php" novalidate>
                    <div class="row text-center">
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="number" id="fi" name="fi" required>
                            <div class="invalid-feedback">
                                Ingresar un número valido
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <input class="form-control" type="number" id="se" name="se" required>
                            <div class="invalid-feedback">
                                Ingresar un número valido
                            </div>
                        </div>
                        <div class="col-sm-12 mb-3">
                            <select class="form-select" name="op">
                                <option selected disabled>Seleccionar operación...</option>
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multi">Multiplicación</option>
                            </select>
                        </div>
                        <div class="col">
                            <button class="btn btn-success" type="submit">Enviar</button>
                        </div>
                    </div>
                </form>
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