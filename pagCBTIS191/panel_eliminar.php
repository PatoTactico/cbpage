<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
        <?php
        //Llama la conexion
        require_once("conexion.php");

        //Recupera los datos del formulario
        $Num_De_Control = $_GET['id'];

        //Muestra el dato seleccionado
        echo $Num_De_Control;

        //Solicita eliminar el registro seleccionado
        $sql1 = "DELETE FROM Boletas WHERE Num_De_Control = '$Num_De_Control'";
        $sql2 = "DELETE FROM Alumnos WHERE Num_De_Control = '$Num_De_Control'";

        //Ejecuta la consulta
        $result1 = mysqli_query($conn, $sql1);
        $result2 = mysqli_query($conn, $sql2);

        //Si la consulta es correcta, muestra el mensaje de exito, sino muestra el error

        if ($result1 && $result2) {

            // IMPORTANTE | El redireccionamiento con header('location') no funciona en servidores compartidos
            // así que utilizaremos js para ello utilizamos location.herf
            echo "<script>location.href='panel_alumnos.php?removido=true';</script>";
            die();
        } else {
            echo "<h1>Error al eliminar alumno</h1>";
        }
                    //cerrar la conexion
                    mysqli_close($conn);



        ?>

    </div>

</body>
</html>