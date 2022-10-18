<!-- Inicio php -->
<?php

//Conexion a base de datos
$enlace = mysqli_connect("127.0.0.1", "root", "", "ciflights");

//Mensaje de error
if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
}

//Query selección tabla "destinos"
$query= "SELECT * ";
$query.= "FROM destinos ";

//Consulta a la base de datos
$resultado = mysqli_query($enlace, $query);

?>

<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="en">
    <!-- Inicio head -->
    <head>
        <meta charset="utf-8">
        <!-- Titulo Pestaña -->
        <title>C.I. FLIGHTS</title>

        <!-- Conexión Google Fonts (Fuentes)-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- Conexión Librerías CSS (Estilos)-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Conexión Carpeta style.css (Estilos)-->
        <link href="css/style.css" rel="stylesheet">

        <!-- Insertar Icono en pestaña -->
        <link rel="icon" href="img/avion.ico">
    </head>
    
    <!-- Inicio body -->
    <body>
        <!-- Barra Inicial-->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        ciflights.users@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        314-254-11-15
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Barra Inicial -->
        
        <!-- Barra de Opciones -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <!-- Opciones Principales -->
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="destinos.php" class="nav-item nav-link">Destinos</a>
                            <a href="nosotros.php" class="nav-item nav-link">Nosotros</a>
                        </div>
                        <!-- Opciones Usuarios -->
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Usuario</a>
                                <div class="dropdown-menu">
                                    <a href="login.php" class="dropdown-item">Ingresar</a>
                                    <a href="login.php" class="dropdown-item">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Final Barra de Opciones -->      
        
        <!-- Barra Posterior -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo Prinicipal -->
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <!-- Barra de Busqueda -->
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Buscar">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Barra Posterior -->       
        
        <!-- Video Presentación -->
        <div class="header-content">
            <br><br><br><br><br>
            <h1>Bienvenido a Colombian International Flights</h1>
            <p>El mejor sitio para compra de tiquetes de avión a nivel nacional.</p>
        </div>
        <!-- Video -->
        <div align="center" class="header-video">
            <video src="video/avion.mp4" autoplay loop muted></video>
        </div>      
        <!-- Final Video Presentación -->
    
        <!-- Zona Vuelos Recomendados -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Vuelos Recomendados</h1>
                </div>
                <div class="product-view">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <!-- Obtener los datos consultados como un array asociativo -->
                                <?php
                                while ($row = mysqli_fetch_assoc($resultado)) {
                                ?>
                                    <div class="col-md-4">
                                        <div class="product-item">
                                            <div class="product-title">
                                                <!-- Titulo traido de la base de datos -->
                                                <a href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>"><?php echo $row["name"] ?></a>
                                                <div class="ratting">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="product-image">
                                                <!-- Enlace página de viajes con id de cada vuelo de la base de datos -->
                                                <a href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>">
                                                    <!-- Nombre de la imagen del vuelo, igual a la id del vuelo -->
                                                    <img src="img/<?php echo $row["id"] ?>.jpg" alt="Product Image"></a>
                                                <div class="product-action">
                                                    <a href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <!-- Precio traido de la base de datos -->
                                                <h3><span>$</span><?php echo $row["price"] ?></h3>
                                                    <a class="btn" href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>"><i class="fa fa-search"></i>Ver</a>
                                            </div>
                                        </div>
                                    </div>   
                                <?php
                                }
                                ?>
                            </div>                                   
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Zona Vuelos Recomendados -->

        <!-- Zona de Socios -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/skin.png" alt=""></div>
                    <div class="brand-item"><img src="img/appetit.png" alt=""></div>
                    <div class="brand-item"><img src="img/happypaws.png" alt=""></div>
                    <div class="brand-item"><img src="img/cake.png" alt=""></div>
                    <div class="brand-item"><img src="img/bless.png" alt=""></div>
                    <div class="brand-item"><img src="img/superstar.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Final Zona de Socios -->

        <!-- Footer Contactos -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <!-- Información de Ubicación -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Ubicación</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bogotá, Colombia</p>
                                <p><i class="fa fa-envelope"></i>ciflights@gmail.com</p>
                                <p><i class="fa fa-phone"></i>314-254-11-15</p>
                            </div>
                        </div>
                    </div>
                    <!-- Información Redes Sociales -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Siguenos</h2>
                            <div class="contact-info">
                            <div class="social">
                                    <a href="https://twitter.com/CCIFLIGHTS"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.facebook.com/profile.php?id=100086284759401"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.linkedin.com/in/c-i-f-ciflights-1a7406250/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.instagram.com/ciflights/?hl=es-la"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.youtube.com/channel/UCQmkyDAjt19l_uSdmahvXgg"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
        <!-- Final Footer Contactos -->
        
        <!-- Footer Derechos Reservados -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="#">Colombian International Flights</a>. Derechos Reservados</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Footer Derechos Reservados -->       
        
        <!-- Boton de Vuelta al Inicio -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Conexión Script Java -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <!-- Conexión Librerias Java -->
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Conexión Template Java -->
        <script src="js/main.js"></script>
    </body>
</html>

<?php
//limpiar memoria de la consulta
mysqli_free_result($resultado);

//cerrar consulta mysql
mysqli_close($enlace);

?>