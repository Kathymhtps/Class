<?php
if ($_POST) {
    $Movie = $_POST["txtMovie"];
    echo "Searching results for: ". $Movie;
}
else {
    echo "Hello, write a movie name for research";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="ejercicio4.php"  method="POST">
    <input type="text" name="txtMovie" placeholder="Movie">
    <input type="submit"
    value="Search">
    </form>
</body>
</html>