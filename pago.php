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
$destino = $_POST["destino"];

//query seleccionar "id" de la tabla "destinos"
$query= "SELECT * ";
$query.= "FROM destinos ";
$query.= "WHERE id= $destino ";

//Consulta a la base de datos
$resultado = mysqli_query($enlace, $query);

//Traer los resultados y los guarda
$row = mysqli_fetch_array($resultado);

//Crea la variable $total multiplicando la cantidad de sillas contadas con el precio
$total = sizeof($_POST["chairs"]) * $row["price"];

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
        <!-- Titulo Pestaña -->
        <title>C.I. FLIGHTS - <?php echo $row["name"];?></title>

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
        
        <!-- Zona Pago -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <!-- Datos Titular Tarjeta -->
                                <h2>Datos Titular de Tarjeta</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nombres</label>
                                        <input class="form-control" type="text" placeholder="Nombres">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Apellidos</label>
                                        <input class="form-control" type="text" placeholder="Apellidos">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Correo</label>
                                        <input class="form-control" type="text" placeholder="Correo">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Teléfono</label>
                                        <input class="form-control" type="text" placeholder="Teléfono">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Tipo de Identificación</label>
                                        <select class="custom-select">
                                            <option selected>Cédula de ciudadanía</option>
                                            <option>Documento Nacional de identidad</option>
                                            <option>Identificador único de ciudadanía</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>País</label>
                                        <select class="custom-select">
                                            <option selected>Colombia</option>
                                            <option>Venezuela</option>
                                            <option>Argentina</option>
                                            <option>Ecuador</option>
                                            <option>Estados Unidos</option>
                                            <option>Peru</option>
                                            <option>Uruguay</option>
                                            <option>Brazil</option>
                                            <option>Chile</option>
                                            <option>Paraguay</option>
                                            <option>Bolivia</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Ciudad</label>
                                        <input class="form-control" type="text" placeholder="Ciudad">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Dirección</label>
                                        <input class="form-control" type="text" placeholder="Dirección">
                                    </div>
                                </div>
                                    <!-- Datos de Tarjeta -->
                                    <h2>Datos de la tarjeta</h2>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Número de Tarjeta</label>
                                            <input class="form-control" type="text" placeholder="Número de Tarjeta">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Fecha de Vencimiento</label>
                                            <input class="form-control" type="text" placeholder="Fecha de Vencimiento">
                                        </div>
                                        <div class="col-md-6">
                                            <label>CVV</label>
                                            <input class="form-control" type="text" placeholder="CVV">
                                        </div>
                                        <div class="col-md-6">
                                        <label>Tipo de Tarjeta</label>
                                        <select class="custom-select">
                                            <option selected>American Express</option>
                                            <option>Visa</option>
                                            <option>Diners</option>
                                            <option>Mastercard</option>
                                        </select>
                                    </div>
                                </div>                             
                            </div>
                        </div>
                    </div>
                    <!-- Zona Total -->
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Total</h1>
                                <!-- Precio traido de la base de datos -->
                                <p>Vuelo(s)<span><?php echo number_format($row["price"], 2) ?></span></p>
                                <!-- Número de Sillas traido de la cantidad seleccionada -->
                                <p class="sub-total">Cantidad<span><?php echo sizeof($_POST["chairs"])?></span></p>
                                <!-- Variable $total -->
                                <h2>Total<span><?php echo number_format($total, 2) ?></span></h2>
                            </div>
                            <!-- Botón Total -->
                            <div class="checkout-payment">
                                <div class="checkout-btn">
                                    <a class= "btn" href= "index.php">Pagar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Final Zona Total -->
                </div>
            </div>
        </div>
        <!-- Final Zona Pago -->
        
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

