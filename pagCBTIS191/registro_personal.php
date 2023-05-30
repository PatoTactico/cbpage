<?php

include("conexion.php");



$Num_De_Control = $_GET['Matricula'];
$Nombre = $_GET['Nombre'];
$Ap_Pat = $_GET['Ap_Pat'];
$Tel = $_GET['Telefono'];
$Contra = $_GET['Contraseña'];



$sql = "INSERT INTO Profesores (Matri_Profs, Nombre, Apellidos, Telefono,Contraseña) VALUES ('$Num_De_Control','$Nombre ','$Ap_Pat','$Tel','$Contra')";



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