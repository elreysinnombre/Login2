<?php
$correo=$_POST["correo"];
$palabra_secreta=$_POST["palabra_secreta"];
$palabra_secreta_confirmar=$_POST["palabra_secreta_confirmar"];
if($palabra_secreta!==$palabra_secreta_confirmar){
    echo "las contraseñas no coinciden :(";
    exit;
}
include_once "funciones.php";
$existe=  usuarioExiste($correo);
if($existe){
    echo "lo siento ya existe alguien regristado con ese correo";
    exit;
}
$registradoCorrectamente=registrarUsuario($correo,$palabra_secreta);
if($registradoCorrectamente){
    echo "registrado correctamente";
}else{
    echo "no registrado";
}
?>