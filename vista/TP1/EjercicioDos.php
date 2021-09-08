<?php 
$Titulo = "Ejercicio 2";
include_once("../../vista/estructura/header.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card border rounded shadow fw-bold ps-3">
                <h4>Ingresar la cantidad de horas de cursada por dia:</h4>
                <form class="form-horizontal" id="horas" name="horas" method="GET" action="accionDos.php" data-toggle="validator" enctype="multipart/form-data" novalidate>
                    <div class="form-group">
                        <div class="row my-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Lunes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="lunes" id="lunes" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Martes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="martes" id="martes" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Miercoles</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="miercoles" id="miercoles" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Jueves</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="jueves" id="jueves" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row mb-2">
                            <div class="col-sm-2 pt-1">
                                <label class="control-label">Viernes</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="viernes" id="viernes" />
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mb-1" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include_once("../../vista/estructura/footer.php"); ?>