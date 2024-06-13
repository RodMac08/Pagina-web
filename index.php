<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecNopolis</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    
    <!--Inicio scroll bar-->
    <!-- horizontal progress bars -->
    <div class="progress-bar horizontal top"></div>
    <div class="progress-bar horizontal bottom"></div>

    <!-- vertical progress bars -->
    <div class="progress-bar vertical left"></div>
    <div class="progress-bar vertical right"></div>
    <!--Fin scroll bar-->
    <!--Inicio header-->
     <header class="header">
        <!--Inicio menu-->
        <div class="menu container">
            <a href="index.php" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Nosotros.php">Nosotros</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
                    <a href="CierraSesion.php" class="btn-1">Cerrar sesión</a>
        </div>
        <!--Fin menu--> 
     </header>
     <!--Fin header-->
    
    <!--Inicio cartelera-->
     <section class="movies container">
        <h2>Peliculas en cartelera</h2>
        <hr>
        <div class="box-container-1">
            <?php
            // Conexión a la base de datos (reemplaza con tus credenciales)
            $db_host = 'localhost';
            $db_user = 'id21441003_rodrigomacias08';
            $db_pass = 'Mara081103*';
            $db_name = 'id21441003_cine';

            $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

            if ($conn->connect_error) {
                die("Error de conexión: " . $conn->connect_error);
            }

            // Realizar una consulta para obtener datos de la tabla Funcion
            $sql = "SELECT nombre, descripcion, img_portada FROM Funcion";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $nombre = $row['nombre'];
                    $descripcion = $row['descripcion'];
                    $img_portada = $row['img_portada'];

                    // Generar dinámicamente el HTML para cada película
                    echo '<div class="box-1">';
                    echo '<div class="content">';
                    echo '<img src="' . $img_portada . '" class="portada" alt="' . $nombre . '">';
                    echo '<h3>' . $nombre . '</h3>';
                    echo '<br>';
                    echo '<p>' . $descripcion . '</p>';
                    echo '<div class="botones-1">';
                    echo '<a href="Paginas horarios/Horario.php?pelicula=' . $nombre . '" class="btn-2" name="' . $nombre . '">Ver horarios</a>';

                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No hay películas disponibles en cartelera.</p>";
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>
        </div>
     </section>
     <br><br>
     <!--Fin cartelera-->
     <!--inicio carousel-->
    <div class="owl-carousel owl-theme">
    <div class="item">
        <img src="imagenes/antro.jpg">
    </div>
    <div class="item">
        <img src="imagenes/combate mortal.jpg">
    </div>
    <div class="item">
        <img src="imagenes/el bajista.jpg">
    </div>
    <div class="item">
        <img src="imagenes/el risas.jpg">
    </div>
    <div class="item">
        <img src="imagenes/liga de la injusticia.jpg">
    </div>
    <div class="item">
        <img src="imagenes/pelicula oscura.jpg">
    </div>
    <div class="item">
        <img src="imagenes/pajaros felices.jpg">
    </div>
    <div class="item">
        <img src="imagenes/navidad.jpg">
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    <!--Fin carousel-->
     <!--Inicio footer-->
     <footer class="footer container">
     <h3>TecNopolis</h3>
     <br>
     <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="Nosotros.php">Nosotros</a></li>
        <li><a href="Formulario.php">Contactanos</a></li>
     </ul>
    </footer>
     <!--Fin footer-->
     <script type ="text/javascript">
         $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

     </script>
     <script type="text/javascript">
        var h = document.documentElement,
    b = document.body,
    st = 'scrollTop',
    sh = 'scrollHeight',
    htop = document.querySelector('.progress-bar.horizontal.top'),
    hbot = document.querySelector('.progress-bar.horizontal.bottom'),
    vleft = document.querySelector('.progress-bar.vertical.left'),
    vright = document.querySelector('.progress-bar.vertical.right'),
    scroll;

document.addEventListener('scroll', function() {
   console.log(h, b);
   // let's calculate the scroll position
   // ( body.scrollTop / ( body.scrollHeight - document.height ) ) * 100
   // multiplying by 100 here gives us a percent value
   scroll = ( h[st] || b[st] ) / ( ( h[sh] || b[sh] ) - h.clientHeight ) * 100;
   
   // set our variable for CSS to use
   htop.style.setProperty('--scroll', scroll + '%');
   hbot.style.setProperty('--scroll', scroll + '%');
   vleft.style.setProperty('--scroll', scroll + '%');
   vright.style.setProperty('--scroll', scroll + '%');
});
    </script>
</body>
</html>