<?php

//Conexion a base de datos
$enlace = mysqli_connect("127.0.0.1", "root", "", "ciflights");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    //    header('Location: login.php?status=0&msg=Error al guardar registro: ' . mysqli_connect_error());
}

//Insertar registro
$destino = $_POST["destino"];

$query= "SELECT * ";
$query.= "FROM destinos ";
$query.= "WHERE id= $destino ";
$resultado = mysqli_query($enlace, $query);

$row = mysqli_fetch_array($resultado);
$total = sizeof($_POST["chairs"]) * $row["price"];
//Consulta de otros destinos

//Fin consulta de otros destinos
mysqli_free_result($resultado);

mysqli_close($enlace);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>C.I. FLIGHTS - Pago <?php echo $row["name"] ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/seating.css" rel="stylesheet">
        <link rel="icon" href="img/avion.ico">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        ciflights.user@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        314-254-11-15
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Inicio</a>
                            <a href="destinos.php" class="nav-item nav-link">Destinos</a>
                            <a href="nosotros.php" class="nav-item nav-link">Nosotros</a>
                        </div>
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
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Buscar">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
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
                                    
                                    <!-- <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Create an account</label>
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="shipto">
                                            <label class="custom-control-label" for="shipto">Ship to different address</label>
                                        </div>
                                    </div> -->
                                </div>
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
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                            <div class="checkout-summary">
                                <h1>Total</h1>
                                <p>Vuelo(s)<span><?php echo number_format($row["price"], 2) ?></span></p>
                                <p class="sub-total">Cantidad<span><?php echo sizeof($_POST["chairs"])?></span></p>
                                <h2>Total<span><?php echo number_format($total, 2) ?></span></h2>
                            </div>
                            <div class="checkout-payment">
                                <div class="checkout-btn">
                                    <a class= "btn" href= "index.php">Pagar</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout End -->
        
        <!-- Footer Start -->
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
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
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="#">Colombian International Flights</a>. Derechos Reservados</p>
                    </div>

                    <div class="col-md-6 template-by">
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->					
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->       
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>  
