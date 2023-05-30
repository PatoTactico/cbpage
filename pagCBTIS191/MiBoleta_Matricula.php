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
    <!--<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />-->
    <link rel="stylesheet" href="./css/swiper-bundle.min.css">

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
                <li ><a href="index.html"><i class="fas fa-home"></i> Bienvenido</a></li>
                <li><a href="#"><i class="fa-solid fa-table"></i> Alumnos</a>
                    <ul>
                        <li><a href="#">Solicitud de Registro</a></li>
                        <li><a href="MiBoleta.html">MiBoleta</a></li>
                        <li><a href="calendario.html">Calendario</a></li>
                    </ul>
                </li>

                <li><a href="#"><i class="fa-solid fa-list"></i> Docentes</a>
                    <ul>
                        <li><a href="login_mas.html">Acceso</a></li>
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

            <?php

include("conexion.php");

session_start();



$Num_De_Control = $_POST['id_Num_De_Control'];


 $sql = "  SELECT p.nombre,m.Nom_Mat,c.Parcial_1,c.Parcial_2,c.Parcial_3,c.Promedios,c.Num_De_Control
 from materias m, calificaciones c, boletas b , profesores p
 where m.Matri_Profs=p.matri_profs
 and b.ID_Calificacion=c.ID_Calificacion
 and b.Num_De_Control= '$Num_De_Control'";


    


if (mysqli_query($conn, $sql)) {
  echo '<script>
  alert("espera un momento");
 

</script>' ?>

<table>
<tr>
<th>PROF.</th>
                        <th>MATERIA</th>
                        <th>PARCIAL 1</th>
                        <th>PARCIAL 2</th>
                        <th>PARCIAL 3</th>
                        <th>PROMEDIO</th>
</tr>

    <?php 

        //Consultamos datos para plasmarlo en la tabla

        include("conexion.php");

        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)) { ?> 

        <tr>

            <td><?php echo $row['nombre'] ?></td>
            <td><?php echo $row['Nom_Mat'] ?></td>
            <td><?php echo $row['Parcial_1'] ?></td>
            <td><?php echo $row['Parcial_2'] ?></td>
            <td><?php echo $row['Parcial_3'] ?></td>
            <td><?php echo $row['Promedios'] ?></td>
                
            <div class="boton-listado">

            </div>

        </tr>

    <?php } ?>

</table>
<?php 
} else {
    
  echo "Error :( : " . $sql . "<br>" . mysqli_error($conn);
}
echo $sql;
echo "si se conecto";
mysqli_close($conn);
?>

            </div>
      </div>          

        </article>


    </div>

</div>

    <!--SOLICITA SCRIPT-->
    <script src="./js/script.js"></script>
    
    <!--<script>
        var time=2000;
        let content = document.querySelector('.banner-imgBox2');
        let switchBtn = document.querySelector('.banner-imgBox-div');
        switchBtn.children[0].classList.add('on2');
        let index=0;
        let x=0;
        function marginLeft(right) {
            if(right){
                switchBtn.children[index].classList.remove('on2');
                if(index==switchBtn.children.length-1){
                    index=0;
                    content.innerHTML+=content.innerHTML;
                    x++;
                }else {
                    index++;
                    x++;
                }
                switchBtn.children[index].classList.add('on2');
                content.style.marginLeft=x*-1530+"px"
            }else{
                switchBtn.children[index].classList.remove('on2');
                if(index==0){
                    index=switchBtn.children.length-1;
                    if(x==0){
                        x=0
                    }else{
                        x--;
                    }
                }else {
                    index--;
                    x--;
                }
                switchBtn.children[index].classList.add('on2');
                content.style.marginLeft=x*-1530+"px"
            }
        
        }
        
        
        var interval = setInterval(() => {
            marginLeft(true)
        }, time);
        
        
        let container = document.querySelector('.banner-imgBox');
        // Limpia el temporizador cuando pasa el mouse
        container.onmouseover = function () {
            clearInterval(interval);
        }
             // Establecer el temporizador cuando el mouse se aleja
        container.onmouseout = function () {
            // Limpia el temporizador primero
            clearInterval(interval);
            // Desliza hacia la derecha e inicia el temporizador
            // marginLeft(true)
            interval = setInterval(() => {
                marginLeft(true)
            }, time);
        }
        </script>
        -->

    <script src="./js/banner-swiper.js"></script>    
    <!--<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->
    <script src="./js/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>

</body>
</html>