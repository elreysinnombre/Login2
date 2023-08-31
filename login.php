<?php
$correo = $_POST["correo"];
$palabraSecreta= $_POST["palabra_secreta"];
include_once "funciones.php";
$logueadoConExito = login($correo,$palabraSecreta);
if ($logueadoConExito) {
    header("Location: secreta.php");
    exit;
} else {
    echo "Usuario o contraseña incorrecta";
}