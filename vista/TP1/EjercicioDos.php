<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card border rounded shadow fw-bold">
                <form class="needs-validation ms-3" id="horas" name="horas" method="GET" action="accionDos.php" novalidate>
                    <h4>Ingresar la cantidad de horas por dia</h4>
                    <div class="col-md-9 mt-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="mon">Lunes</span>
                            <input class="form-control" type="number" id="lunes" name="lunes" aria-describedby="mon">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="tue">Martes</span>
                            <input class="form-control" type="number" id="martes" name="martes" aria-describedby="tue">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="wed">Miércoles</span>
                            <input class="form-control" type="number" id="miercoles" name="miercoles" aria-describedby="wed">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="thu">Jueves</span>
                            <input class="form-control" type="number" id="jueves" name="jueves" aria-describedby="thu">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="fri">Viernes</span>
                            <input class="form-control" type="number" id="viernes" name="viernes" aria-describedby="fri">
                        </div>
                    <button class="btn btn-primary mb-1" type="submit">Enviar</button>
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