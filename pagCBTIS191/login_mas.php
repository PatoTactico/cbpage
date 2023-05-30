<?php
include("conexion.php");

$Num_De_Control = $_GET['mat'];
$Nombre = $_GET['nombre'];


echo "$Num_De_Control";
echo "$Nombre";



$consulta="SELECT*FROM Profesores where Matri_profs='$Num_De_Control' and Nombre='$Nombre'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:panel.php");

}else{
    ?>
    <?php


  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);
