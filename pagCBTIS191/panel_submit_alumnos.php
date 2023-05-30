
<!DOCTYPE html>
<html lang="en">
<head>    

<title>CBTis 191 Nicolás Bravo | Gutierrez Zamora</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum.scale=1.0,
    minimum-scale=1.0">

<!--------------------------------------
CSS E ICONS
---------------------------------------> 
    
    <script src="https://kit.fontawesome.com/839ff977a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">
    <link rel="stylesheet" href="./css/sesion.css">

</head>
<body>
    
<!--------------------------------------
HEADER - NAVBAR
--------------------------------------->

<header> 

    <!--Lo colocamos dentro de un conenedor para darle estilos desde css-->
    <div class="header-content">

        <!--Logo-->
        <div class="logo">
            <h1>CB<b>tis</b> 191 "<b>Nicolás Bravo</b>"</h1>
        </div>

        <!--Menu-->
        <div class="menu" id="show-menu">

            <nav>
                <ul class="nav">
                <li ><a href="index.html"><i class="fas fa-home"></i> Inicio</a></li>

                <li><a href="#"><i class="fa-solid fa-list"></i> Docentes</a>
                    <ul>
                        <li><a href="login_mas.html">Acceso</a></li>
                        <li><a href="panel.php">Panel</a></li>
                        <li><a href="registro.html">Registrar Alumno</a></li>
                        <li><a href="registro_personal.html">Registrar Personal</a></li>
                        <li><a href="#">Sitio</a></li>

                    </ul>
                </li>
                </li>

                </ul>
            </nav>

        </div>

    </div>

    <!--Boton de menu-->
    <div id="icon-menu">

        <i class="fa-solid fa-bars"></i>

    </div>

</header>


    <!--Contenedor para colocar el artículo | Es para el texto de la hoja izquierda-->
    <div class="container-content">

            <article>

                <?php

                //Llama la conexion a la pagina
                require_once('conexion.php');

                //Llama los resultados con $_GET
                $idF = $_GET['id'];
                $Ap_Pat = $_GET['apFormEdit'];
                $Ap_Mat = $_GET['amFormEdit'];
                $Nombre = $_GET['nomFormEdit'];
                $Grado = $_GET['gradFormEdit'];
                $Grupo = $_GET['espFormEdit'];

                //Consulta los resultados con UPDATE SET
                

                $sql =
                "UPDATE alumnos SET Ap_Pat = '$Ap_Pat', Ap_Mat = '$Ap_Mat', Nombre = '$Nombre', Grado = '$Grado', Grupo = '$Grupo' WHERE Num_De_Control = '$Num_De_Control'";

                //Muestra los resultados
                //Sube la consulta, si es correcta, muestra el mensaje de exito, sino muestra el error
                if (mysqli_query($conn, $sql)) {
                


                ?>

                    <h1>Se ha modificado corretamente</h1>
                
                <?php

                //Muestra los resultados de la consulta


                echo "Ap_Pat: " . $Ap_Pat . "<br>";
                echo "Ap_Mat: " . $Ap_Mat . "<br>";
                echo "Nombre: " . $Nombre . "<br>";
                echo "Grado: " . $Grado . "<br>";
                echo "Grupo: " . $Grupo . "<br>";
            
                } else {

                ?>

                    <h1>Ha ocurrido un error</h1>

                <?php

                echo "Error: " . $sql . "<br>" . mysqli_error($conn);

                }
                ?>

                    <a href="panel_alumnos.php"><button>Regresar</button></a>
                
                <?php

                //Cierra la conexion
                mysqli_close($conn);

                ?>
            </article>

      <div class="container-aside">
        <aside>
            <img src="./img/cbtisLogo.png" alt="">


            <h2>¿A QUIÉN VA DIRIGIDO?</h2>
            <p>A los jóvenes egresados de secundaria que deseen seguir estudiando,
                como a quienes requieren cursar una carrera técnica para incorporarse al mercado laboral. </p>

            <br><h2>Uniforme Escolar</h2><br>

            <div id="carrusel-contenido">
                <div id="carrusel-caja">
                    <div class="carrusel-elemento">
                        <img class="imagenes" src="img/vestHombre.png" >
                    </div>
                    <div class="carrusel-elemento">
                        <img class="imagenes" src="img/vestMujer.png" >
                    </div>
                    <div class="carrusel-elemento">
                        <img class="imagenes" src="img/cbtisCamisa.png" >
                    </div>

                    </div>
            </div>

        </aside>

        <aside>
            
            <h2>DURACIÓN</h2>
            <p>3 años. </p>

            <h2>MODALIDAD </h2>
            <p>Educación Escolarizada: Esta modalidad es una formación bivalente,
                por una parte se egresa con una carrera técnica con los conocimientos,
                habilidades y destrezas para integrarse al sector productivo como técnico
                profesional y por otra parte ofrece al egresado la posibilidad
                de continuar sus estudios del nivel superior. </p>

            <h2>AL CONCLUIR TUS ESTUDIOS OBTENDRÁS </h2>
            <p>Obtienes el certificado de bachillerato y una carta de pasante; Una vez cubiertos los requisitos correspondientes,
            el egresado obtiene el título y la cédula profesional de la carrera cursada, registrados ante la Dirección General
            de Profesiones de la Secretaría de Educación Pública. </p>

            <a href="https://www.facebook.com/cbtis191gtzzamora"><button>Leer más</button></a>
        </aside>
    </div>

    </div>
</body>

<script src="./js/banner-swiper.js"></script>  
<script src="./js/banner-swiper.js"></script>    
<!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->
<script src="./js/swiper-bundle.min.js"></script>
<script src="./js/app.js"></script>
<script src="./js/confirmacion.js"></script>

</html>