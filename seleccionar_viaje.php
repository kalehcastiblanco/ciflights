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

//Presentar Información en la URL
$destino = $_GET["destino"];

//query seleccionar "id" de la tabla "destinos"
$query= "SELECT * ";
$query.= "FROM destinos ";
$query.= "WHERE id= $destino ";

//Consulta a la base de datos
$resultado = mysqli_query($enlace, $query);

//Traer los resultados y los guarda
$row = mysqli_fetch_array($resultado);

//limpiar memoria de la consulta
mysqli_free_result($resultado);

//cerrar consulta mysql
mysqli_close($enlace);

?>

<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="en">
    <!-- Inicio head -->
    <head>
        <meta charset="utf-8">
        <!-- Titulo Pestaña con nombre del vuelo, traido de la base de datos-->
        <title>C.I. FLIGHTS - <?php echo $row["name"] ?></title>

<!-- Conexión Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- Conexión Librerías CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="lib/slick/slick.css" rel="stylesheet">
<link href="lib/slick/slick-theme.css" rel="stylesheet">

<!-- Conexión Carpeta style.css -->
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
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
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
        
        <!-- Recorrido Página -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="destinos.php">Destinos</a></li>
                    <li class="breadcrumb-item active"><?php echo $row["name"] ?></li>
                </ul>
            </div>
        </div>
        <!-- Final Recorrido Página -->
        
        <!-- Inicio Zona Destino-->
        <div class="product-detail">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="product-detail-top">
                            <div class="row align-items-center">
                                <div class="col-md-5">
                                    <div class="product-slider-single normal-slider">
                                        <!-- Nombre de la imagen del vuelo, igual a la id del vuelo -->
                                        <img src="img/<?php echo $destino ?>.jpg" alt="Product Image">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="product-content">
                                        <!-- Titulo traido de la base de datos -->
                                        <div class="title"><h2><?php echo $row["name"] ?></h2></div>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="price">
                                            <h4>Precio:</h4>
                                            <!-- Precio traido de la base de datos -->
                                            <p><?php echo number_format($row["price"], 2) ?></p>
                                        </div>
                                        <!-- Zona Cantidad -->
                                        <div class="quantity">
                                            <h4>Cantidad:</h4>
                                            <div class="qty">
                                                <!-- Botón menos -->
                                                <button class="btn-minus"><i class="fa fa-minus"></i></button>
                                                <!-- Número de asientos -->
                                                <input type="text" id="quantity" name="quantity" value="1" readonly>
                                                <!-- Id de vuelo escondida -->
                                                <input type="hidden" id="destino" name="destino" value="<?php echo $_GET['destino'] ?>" readonly>
                                                <!-- Botón más -->
                                                <button class="btn-plus"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- Botón Comprar -->
                                        <div class="action">
                                            <a class="btn" id="confirm"><i class="fa fa-shopping-bag"></i>Comprar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Final Zona Destino -->

                        <!-- Zona Detalles -->
                        <div class="row product-detail-bottom">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="pill" href="#description">Descripción</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#specification">Especificación</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="pill" href="#reviews">Opiniones</a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <!-- Descripción -->
                                    <div id="description" class="container tab-pane active">
                                        <h4>Descripción del Destino</h4>
                                        <!-- Texto Descripción traida de la base de datoss -->
                                        <?php echo $row["description"] ?>
                                    </div>
                                    <!-- Especificación -->
                                    <div id="specification" class="container tab-pane fade">
                                        <h4>Especificación del Vuelo</h4>
                                        <ul>
                                             <li>Empresa: <?php echo $row["company"] ?></li><!--Empresa traida de la base de datos-->
                                            <li>Horas de Vuelo: <?php echo $row["hours"] ?></li><!--Horas traidas de la base de datos-->
                                            <li>Avión: <?php echo $row["airplane"] ?></li><!--Avión traido de la base de datos-->
                                            <li>Capacidad del Avión: <?php echo $row["capacity"] ?> Pasajeros</li><!--Capacidad traida de la base de datos-->
                                            <li>Peso máximo: <?php echo number_format($row["weight"], 2) ?> kg</li><!--Peso traido de la base de datos-->
                                        </ul>
                                    </div>
                                    <!-- Opinión -->
                                    <div id="reviews" class="container tab-pane fade">
                                        <div class="reviews-submitted">
                                            <div class="reviewer">Felipe Cuevas<span>13 sep 2022</span></div>
                                            <div class="ratting">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <p>
                                                Buena organización y puestos muy comodos, bueno para su precio
                                            </p>
                                        </div>
                                        <!-- Cuadro Opinión -->
                                        <div class="reviews-submit">
                                            <h4>Danos tu opinion:</h4>
                                            <div class="ratting">
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                            <div class="row form">
                                                <div class="col-sm-6">
                                                    <!-- Cuadro Nombre -->
                                                    <input type="text" placeholder="Nombre">
                                                </div>
                                                <div class="col-sm-6">
                                                    <!-- Cuadro Correo -->
                                                    <input type="email" placeholder="Correo">
                                                </div>
                                                <div class="col-sm-12">
                                                    <!-- Cuadro Opinión -->
                                                    <textarea placeholder="Opinión"></textarea>
                                                </div>
                                                <div class="col-sm-12">
                                                    <!-- Botón Enviar -->
                                                    <button>Enviar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Final Zona Detalles -->

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
