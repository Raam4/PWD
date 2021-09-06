<?php
$Titulo = "Resultado ej 3";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe1.php");
include_once("../../utils/funciones.php")
?>
<div class="container">
    <?php
        $data = data_submitted();
        $obj = new controltp1();
        $rpta = $obj->ej3($data);
    ?>
    <h3>Respuesta:</h3>
    <?php echo $rpta?>
    <br />
    <a href='EjercicioTres.php'>Volver</a>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>