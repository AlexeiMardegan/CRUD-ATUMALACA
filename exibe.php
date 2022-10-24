<?php
include("conecta.php");
$sql_ultima_temp = "SELECT * FROM 'controlador4' ORDER BY 'controlador'.'id' DESC limit 1"
$sql_media = "SELECT AVG (temperatura) FROM 'controlador4'";
$sql_maxima = "SELECT MAX (temperatura) FROM 'controlador4'";
$sql_minina =  "SELECT MIN (temperatura) FROM 'controlador4'";

$consulta = mysqli_query($conn,$sql_ultima_temp);
$resultado = mysqli_fetch_array($consulta);
echo "<b>".$resultado["$temperatura"]."</b>";
$consulta2 = mysqli_query($conn,$sql_media);
$resultado2 = mysqli_fetch_array($consulta2);
echo "<b>".$resultado2["$temperatura"]."</b>";
$consulta = mysqli_query($conn,$sql_minima);
$resultado = mysqli_fetch_array($consulta);
echo "<b>".$resultado["$temperatura"]."</b>";
$consulta = mysqli_query($conn,$sql_maxima);
$resultado = mysqli_fetch_array($consulta);
echo "<b>".$resultado["$temperatura"]."</b>";

?>