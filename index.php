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


$query= "SELECT * ";
$query.= "FROM destinos ";
$resultado = mysqli_query($enlace, $query);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>C.I. FLIGHTS</title>
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
        
        <!-- Main Slider Start -->
        
        <div class="header-content">
            <br><br><br><br><br>
            <h1>Bienvenido a Colombian International Flights</h1>
            <p>El mejor sitio para compra de tiquetes de avión a nivel nacional.</p>
        </div>
        
        <div align="center" class="header-video">
            <video src="video/avion.mp4" autoplay loop muted ></video>
        </div>      
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h1>Vuelos Recomendados</h1>
                </div>
                <div class="product-view">
            
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <?php
                            while ($row = mysqli_fetch_assoc($resultado)) {
                            ?>
                                    <div class="col-md-4">
                                        <div class="product-item">
                                            <div class="product-title">
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
                                                <a href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>">
                                                    <img src="img/<?php echo $row["id"] ?>.jpg" alt="Product Image">
                                                </a>
                                                <div class="product-action">
                                                    <a href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>"><i class="fa fa-search"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-price">
                                                <h3><span>$</span><?php echo $row["price"] ?></h3>
                                                <a class="btn" href="seleccionar_viaje.php?destino=<?php echo $row["id"] ?>"><i class="fa fa-shopping-cart"></i>Ver</a>
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
        </div>
        <!-- Featured Product End -->              
        
        <!-- Recent Product Start -->
        
        <!-- Recent Product End -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/skinspa.png" alt=""></div>
                    <div class="brand-item"><img src="img/bon.png" alt=""></div>
                    <div class="brand-item"><img src="img/happypaws.png" alt=""></div>
                    <div class="brand-item"><img src="img/cake.png" alt=""></div>
                    <div class="brand-item"><img src="img/bless.png" alt=""></div>
                    <div class="brand-item"><img src="img/superstar.png" alt=""></div>
                </div>
            </div>
        </div>
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

<?php

mysqli_free_result($resultado);

mysqli_close($enlace);

?>