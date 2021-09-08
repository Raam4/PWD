<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-md-9 ms-3">
                <div class="card border rounded shadow fw-bold">
                    <div class="card-header rounded pb-0">
                        <p class="card-title fw-bold fs-5" style="color: #0081b5;"><i class="fas fa-edit"></i> Cinem@s</p>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Título</label>
                                        <input class="form-control" type="text" placeholder="Titulo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Actores</label>
                                        <input class="form-control" type="text" placeholder="Actores">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Director</label>
                                        <input class="form-control" type="text" placeholder="Director">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Guión</label>
                                        <input class="form-control" type="text" placeholder="Guion">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Producción</label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label>Año</label>
                                        <input class="form-control" type="number" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nacionalidad</label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Género</label>
                                        <select class="form-select">
                                            <option disabled>...</option>
                                            <option>Comedia</option>
                                            <option>Drama</option>
                                            <option>Terror</option>
                                            <option>Romántica</option>
                                            <option>Suspenso</option>
                                            <option>Otra</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Duración</label>
                                        <input class="form-control" type="text" placeholder="">
                                        <label class="fw-light">(minutos)</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Restricciones de Edad</label>
                                    <div class="form-group pt-2">
                                        <input class="form-check-input" type="radio" id="ATP" name="rest">
                                        <label class="form-check-label ms-1 me-2 fw-light" for="ATP">Todo Público</label>
                                        <input class="form-check-input" type="radio" id="M7" name="rest">
                                        <label class="form-check-label ms-1 me-2 fw-light" for="M7">Mayores de 7 años</label>
                                        <input class="form-check-input" type="radio" id="M18" name="rest">
                                        <label class="form-check-label ms-1 me-2 fw-light" for="M18">Mayores de 18 años</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Sinopsis</label>
                                        <textarea class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn btn-primary me-md-2" type="submit">Enviar</button>
                                    <button class="btn btn-secondary" type="reset">Borrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include_once("../estructura/footer.php");
?>