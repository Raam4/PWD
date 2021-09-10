<?php
$Titulo = "Resultado ej 3";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe3.php");
include_once("../../utils/funciones.php");
$data = data_submitted();
$obj = new controltp3();
$rpta = $obj->ej3($data, $_FILES);
$img = $rpta['file'];
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-9 ms-3">
            <div class="card border rounded shadow " style="background-color: #def0d8;">
                <div class="row">
                    <div class="col-md-11"></div>
                    <div class="col-md-1">
                        <a href='EjercicioCuatro.php'><button type="button" class="btn-close btn-sm" disabled></button></a>
                    </div>
                </div>
                <div class="card-body">
                    <h1 style="color: #49779b;">La película introducida es</h1>
                    <br />
                    <div class="text-start fs-5" style="color: #527652;">
                        <?php
                            echo $rpta['str'];
                            echo "<img src=\"".$img['link']."\" border='0' width='350' height='400'>";
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>