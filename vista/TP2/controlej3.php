<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");

if($_POST){
    $credentials = [
        ['user' => 'fulano', 'pass' => 'contrasenia'],
        ['user' => 'mengano', 'pass' => 'contrasenia1'],
        ['user' => 'pepito', 'pass' => 'contrasenia2'],
        ['user' => 'pepon', 'pass' => 'contrasenia3'],
    ];
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $ok = false;
    foreach($credentials as $it){
        if($username == $it['user']){
            $ok = $password == $it['pass'];
            break;
        }
    }
    if($ok){
        echo "Welcome!";
    }else{
        echo "Wrong Credentials!";
    }
}
include_once("../estructura/footer.php");
?>