<?php

include("conexion.php");

$Num_De_Control = $_GET['Num_De_Control'];
$Nombre = $_GET['Nombre'];

$query=mysqli_query($conn,"SELECT * FROM login where Num_De_Control = ".$Num_De_Control." AND Nombre = ".$Nombre.);
$nr=mysqli_num_rows ($query);

if($nr == 1)
{
   header("location:    ");


}

else if ($nr == 0)
{
    echo "<script>alert('Usuario no existe');window.location= 'index.php' </script>";
}
?>