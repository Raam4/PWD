<?php 
$Titulo = "Ejercicio 1";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card border rounded shadow fw-bold">
                <form class="needs-validation" id="num" name="num" method="POST" action="accionUno.php" novalidate>
                    <div class="col-sm-10 ps-3 mb-3">
                        <label for="numero" class="form-label">Ingrese un numero:</label>
                        <input class="form-control" type="number" id="numero" name="numero" required>
                        <div class="invalid-feedback">
                            Ingresar un número entero valido
                        </div>
                    </div>
                    <div class="col-sm-10 ps-3">
                        <button class="btn btn-primary mb-3" type="submit">Enviar</button>
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