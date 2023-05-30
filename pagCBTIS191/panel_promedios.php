
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

          <div class="article-textBox">

            <div class="search-bar">

                <form action="buscar.php" method="post">
                <input required class="controls" type="text" name="grupForm" id="$grup" placeholder="GRADO" list="l01">
                <datalist id="l01">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                </datalist>


                <input required class="controls" type="text" name="gradForm" id="$grad" placeholder="GRUPO" list="l02">
                <datalist id="l02">
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                </datalist>
                <input class="field_a" type="submit" name="buscarp" id="buscarp" value= "BUSCAR">
                <input class="field_a" type="submit" name="subboletap" id="subboletap" value= "SUBIR BOLETA">
                </form>


                </div>


                <table>
                <tr>
                    <th>NO. CONTROL</th>
                    <th>GRADO</th>
                    <th>GRUPO</th>
                    <th>NOMBRE</th>
                    <th>EDITAR</th>
                    <th>ELIMINAR</th>

                </tr>

                    <?php 

                        //Consultamos datos para plasmarlo en la tabla

                        include("conexion.php");
                        $sql = "SELECT  ,c.materi,c.Parcial_1,c.Parcial_2,c.Parcial_3,c.Promedios, a.nombre  from materias m, calificaciones c, boletas b , alumnos a
                        and b.nom_mat=m.nom_mat and b.id_promedios=c.ID_PROMEDIOS and b.Num_De_Control= Num_De_Control";

                        $result=mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_assoc($result)) { ?> 

                        <tr>

                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['promedio'] ?></td>



                        </tr>

                    <?php } ?>

                </table>


          </div>
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

</html>