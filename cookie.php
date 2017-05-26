<?php
  $color = "white";

  if (isset($_GET["color"])) {
    $color = $_GET["color"];
    setcookie("color", $color, time() + 40);
  } else if (isset($_COOKIE["color"])) {
    $color = $_COOKIE["color"];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body style="background-color:<?=$color?>">
    Hola Mundo
    <form action="cookie.php" method="get">
      <select name="color">
        <option value="black">Negro</option>
        <option value="blue">Azul</option>
        <option value="red">Rojo</option>
        <option value="white">Blanco</option>
        <input type="submit" value="Enviar">
      </select>
    </form>
  </body>
</html>
