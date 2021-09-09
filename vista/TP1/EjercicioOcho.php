<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card border rounded shadow fw-bold py-3 px-3">
                <form class="ms-3" id="datos" name="datos" method="POST" action="accionOcho.php" data-toggle="validator" novalidate>
                    <div class="row text-center">
                        <div class="col-sm-6 mb-3">
                            <input class="form-control" name="nombre" type="text" placeholder="Nombre" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <input class="form-control" name="apellido" type="text" placeholder="Apellido" required>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <input class="form-control" name="edad" type="text" placeholder="Edad" required>
                        </div>
                        <div class="col-sm-9 mb-3">
                            <input class="form-control" name="direccion" type="text" placeholder="Dirección" required>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label>Estudiante</label>
                            <div class="form-group pt-2">
                                <label class="radio ms-1 me-2 fw-light">
                                    <input type="radio" id="si" name="estudiante" value="Si" required> Sí
                                </label>
                                <label class="radio ms-1 me-2 fw-light">
                                    <input type="radio" id="no" name="estudiante" value="No" required> No
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-6 my-3">
                            <button class="btn btn-success" type="submit">Enviar</button>
                            <button class="btn btn-secondary" type="reset">Limpiar</button>
                        </div>
                    </form>
<?php include_once("../../vista/estructura/footer.php"); ?>