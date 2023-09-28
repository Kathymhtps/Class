<?php
if ($_POST){
$edad = $_POST["edad"];
$nombre = $_POST["nombre"];
$estatura = $_POST["estatura"];
$estadocivil = $_POST["estadocivil"];

echo "El perfil de Nombre" .$nombre. ",con Edad;" .$Edad. " años tiene una estatura de: "
.$estatura. "m y es: " .$estadocivil. "."
 }