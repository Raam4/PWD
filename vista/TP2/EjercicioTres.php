<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card border rounded shadow fw-bold pb-3 px-3">
                <div class="row">
                    <div class="col-md-11"></div>
                    <div class="col-md-1">
                        <button type="button" class="btn-close btn-sm" disabled></button>
                    </div>
                </div>
                <div class="card-body text-center">
                    <form class="needs-validation ms-3" id="login" name="login" method="POST" action="accionTres.php" novalidate>
                        <h4>Member Login</h4>
                        <div class="input-group my-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-3"><i class="fas fa-user"></i></span>
                            </div>
                            <input id="username" class="form-control" type="text" placeholder="Username" name="user" required>
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text p-3"><i class="fas fa-lock"></i></span>
                            </div>
                            <input id="password" class="form-control" type="password" placeholder="Password" name="pass" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button class="btn btn-success btn-md btn-block w-100" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
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