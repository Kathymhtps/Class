
<?php
//http://localhost/WebAppicationDesign/ejercicio3.php
if ($_POST) {
    $nombre = $_POST["txtNombre"];
    $apellido= $_POST["txtapellido"];
    echo "Hello " . $nombre. "  ". $apellido;
}
else {
    echo "Hello, write your name and lastname";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <form action="ejercicio3.php"  method="POST">
    <input type="text" name="txtNombre" placeholder="nombre">
    <input type="text" name="txtapellido" placeholder="apellido">
    <input type="submit"
    value="Enviar">
    </form>
</body>
</html>