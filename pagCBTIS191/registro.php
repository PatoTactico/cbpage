<?php

include("conexion.php");



$Num_De_Control = $_GET['Matricula'];
$Nombre = $_GET['Nombre'];
$Ap_Pat = $_GET['Ap_Pat'];
$Ap_Mat = $_GET['Ap_Mat'];
$Grado = $_GET['grado'];
$Grupo = $_GET['grupo'];



$sql = "INSERT INTO Alumnos (Num_De_Control, Nombre, Ap_Pat, Ap_Mat,Grado,Grupo) VALUES ('$Num_De_Control','$Nombre ','$Ap_Pat','$Ap_Mat','$Grado','$Grupo')";



if (mysqli_query($conn, $sql)) {
    echo '<script>
    alert("Ya te has registrado ");
    window.location="index.html"; 
  
  </script>';
  } else {
      
    echo "Error :( : " . $sql . "<br>" . mysqli_error($conn);
  }
  echo "$sql";
  echo "si se conecto";
  mysqli_close($conn);
  ?>