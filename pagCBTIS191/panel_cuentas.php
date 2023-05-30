<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum.scale=1.0,
    minimum-scale=1.0">

    <!-- Solicita los estilos e iconos --> 
    <script src="https://kit.fontawesome.com/839ff977a4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/estilos.css">

</head>
<body>
    
<!--------------------------------------
BARRA DE MENU
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

<body>


        <div class="container-content">

            <article>

            <div class="article-textBox">

                <div class="search-bar">

                    <form action="buscar.php" method="post">
                        <input type="text" name="buscar" class="field" id="">
                        <input type="submit" class="field_a" value="Buscar">
                        <a href="registro_alumno.php" class="btn-primary">Añadir</a>
                    </form>

                </div>

                <h2>LISTADO DE PROFESORES</h2>

                <table>
                    <tr>
                        <th>MATRICULA</th>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>TELEFONO<th>
                        EDITAR
                        <th>ELIMINAR</th>
                            

                    </tr>

                        <?php 

                            //Consultamos datos para plasmarlo en la tabla

                            include("conexion.php");
                            $sql="SELECT * FROM Profesores";

                            $result=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_assoc($result)) { ?> 

                            <tr>

                                <td><?php echo $row['Matri_Profs'] ?></td>
                                <td><?php echo $row['Nombre'] ?></td>
                                <td><?php echo $row['Apellidos'] ?></td>
                                <td><?php echo $row['Telefono'] ?></td>
                                    
                                <div class="boton-listado">

                                <td> 
                                <a href= "editar.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-pen-to-square"></i>
                                </a>
                                </td>

                                <td>
                                <a href= "eliminar.php?id=<?php echo $row["id"]; ?>" class="table_item_link">
                                <i class="fa-solid fa-trash"></i>
                                </a>
                                </td>

                                </div>

                            </tr>

                        <?php } ?>
                    
                </table>
            </article>
            
        </div>
    </div>
    
     <!-- JavaScript -->
    <script src="./js/script.js"></script>
    <script src="./js/confirmacion.js"></script>

</body>
</html>