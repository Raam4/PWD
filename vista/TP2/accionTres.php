<?php
$Titulo = "Resultado ej 1";
include_once("../../vista/estructura/header.php");
include_once("../../control/tepe2.php");
include_once("../../utils/funciones.php");
$data = data_submitted();
$obj = new controltp2();
$rpta = $obj->ej3($data);
?>
<div class="container">
    <h3>Respuesta:</h3>
    <?php echo $rpta?>
    <br />
    <a href='EjercicioTres.php'>Volver</a>
</div>
<?php
include_once("../../vista/estructura/footer.php");
?>