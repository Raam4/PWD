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
                    <form class="ms-3" id="login" name="login" method="POST" action="accionTres.php" data-toggle="validator" novalidate>
                        <h4>Member Login</h4>
                        <div class="form-group my-4">
                            <div class="input-group">
                                <span class="input-group-text p-3"><i class="fas fa-user"></i></span>
                                <input id="username" class="form-control" type="text" placeholder="Username" name="user" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <div class="input-group">
                                <span class="input-group-text p-3"><i class="fas fa-lock"></i></span>
                                <input id="password" class="form-control" type="password" placeholder="Password" name="pass" required>
                            </div>
                        </div>
                        <div class="form-group mb-4">
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
<?php include_once("../../vista/estructura/footer.php"); ?>