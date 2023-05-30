<?php

include("conexion.php");



$Matricula = $_GET['Matricula'];
$Nombre_mas = $_GET['Nombre_mas'];
$Ap_Pat_mas = $_GET['Ap_Pat_mas'];
$Ap_Mat_mas = $_GET['Ap_Mat_mas'];
$Curp_mas = $_GET['Curp_mas'];



$sql = "INSERT INTO Inicio_sesion (Matricula, Nombre_mas, Ap_Pat_mas, Ap_Mat_mas, Curp_mas) VALUES ('$Matricula','$Nombre_mas ','$Ap_Pat_mas','$Ap_Mat_mas','$Curp_mas')";



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