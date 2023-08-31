<?php
session_start();
if(empty($_SESSION["correo"])){
    header("Location:login.html");
    exit();
}
echo "soy un menseje secreto";
echo "<br>Se que tu correo es : <strong>". $_SESSION["correo"]."</strong>";
?>
<p>
Hola mundo soy messi chiquito
<img src="https://pbs.twimg.com/media/FkbNNUYXkAMIn3F.jpg" weidth="80px" height="80px">
</p>
<a href="logout.php"> cerrar sesion</a>