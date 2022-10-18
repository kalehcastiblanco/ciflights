<!-- Inicio HTML -->
<!DOCTYPE html>
<html lang="en">
    <!-- Inicio head -->
    <head>
        <meta charset="utf-8">
        <!-- Titulo Pestaña -->
        <title>C.I. FLIGHTS - Asientos</title>

        <!-- Conexión Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- Conexión Librerías CSS -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Conexión Carpeta style.css y seating.css-->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/seating.css" rel="stylesheet">

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
        
        <!-- Zona Recorrido -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="destinos.php">Destinos</a></li>
                    <li class="breadcrumb-item active">Asientos</li>
                </ul>
            </div>
        </div>
        <!-- Final Zona Recorrido -->

        <!-- Avión -->
        <div class="featured-product product">
            <div class="container-fluid">
                    <div class="section-header">
                        <h1>Escoge tu asiento</h1>
                    </div>
                    <div class="row align-items-center product-slider product-slider-4">
                        <!-- Inicio Formulario -->
                        <form method="post" action="pago.php">
                        <div class="plane" style="width: 500px">
                        <div class="cockpit">
                            <h1>Avión</h1>
                        </div>
                        <!-- Señal salida -->
                        <div class="exit exit--front fuselage"></div>

                        <!-- Zona Asientos -->
                        <ol class="cabin fuselage">
                            <!-- Fila 1 -->
                            <li class="row row--1">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1A" value="1A"/>
                                <label for="1A">1A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1B" value="1B"/>
                                <label for="1B">1B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1C" />
                                <label for="1C">1C</label>
                                </li>
                                <li class="seat">
                                <!-- disabled -->
                                    <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1D" />
                                    <label for="1D">1D</label>
                                </li>
                                <li class="seat">
                                    <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1E" />
                                    <label for="1E">1E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="1F" />
                                <label for="1F">1F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 2 -->
                            <li class="row row--2">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox" onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2A" />
                                <label for="2A">2A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2B" />
                                <label for="2B">2B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2C" />
                                <label for="2C">2C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2D" />
                                <label for="2D">2D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2E" />
                                <label for="2E">2E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="2F" />
                                <label for="2F">2F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 3 -->
                            <li class="row row--3">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3A" />
                                <label for="3A">3A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3B" />
                                <label for="3B">3B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3C" />
                                <label for="3C">3C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3D" />
                                <label for="3D">3D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3E" />
                                <label for="3E">3E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="3F" />
                                <label for="3F">3F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 4 -->
                            <li class="row row--4">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4A" />
                                <label for="4A">4A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4B" />
                                <label for="4B">4B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4C" />
                                <label for="4C">4C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4D" />
                                <label for="4D">4D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4E" />
                                <label for="4E">4E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="4F" />
                                <label for="4F">4F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 5 -->
                            <li class="row row--5">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5A" />
                                <label for="5A">5A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5B" />
                                <label for="5B">5B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5C" />
                                <label for="5C">5C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5D" />
                                <label for="5D">5D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5E" />
                                <label for="5E">5E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="5F" />
                                <label for="5F">5F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 6 -->
                            <li class="row row--6">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6A" />
                                <label for="6A">6A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6B" />
                                <label for="6B">6B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6C" />
                                <label for="6C">6C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6D" />
                                <label for="6D">6D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6E" />
                                <label for="6E">6E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="6F" />
                                <label for="6F">6F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 7 -->
                            <li class="row row--7">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7A" />
                                <label for="7A">7A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7B" />
                                <label for="7B">7B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7C" />
                                <label for="7C">7C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7D" />
                                <label for="7D">7D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7E" />
                                <label for="7E">7E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="7F" />
                                <label for="7F">7F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 8 -->
                            <li class="row row--8">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8A" />
                                <label for="8A">8A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8B" />
                                <label for="8B">8B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8C" />
                                <label for="8C">8C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8D" />
                                <label for="8D">8D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8E" />
                                <label for="8E">8E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="8F" />
                                <label for="8F">8F</label>
                                </li>
                            </ol>
                            </li>
                            <!-- Fila 9 -->
                            <li class="row row--9">
                            <ol class="seats" type="A">
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9A" />
                                <label for="9A">9A</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9B" />
                                <label for="9B">9B</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9C" />
                                <label for="9C">9C</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9D" />
                                <label for="9D">9D</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9E" />
                                <label for="9E">9E</label>
                                </li>
                                <li class="seat">
                                <input type="checkbox"onclick="setChair(this, '<?php echo $_GET['quantity']?>')" class="chairs" name="chairs[]" id="9F" />
                                <label for="9F">9F</label>
                                </li>
                            </ol>
                            </li>
                        </ol>
                        <!-- Final Zona Asientos -->

                        <!-- Señal Salida -->
                        <div class="exit exit--back fuselage"></div>
                        </div>
                        <!-- Boton id destino oculto -->
                        <input type="hidden" id="destino" name="destino" value="<?php echo $_GET['destino'] ?>" readonly>
                         <!-- Botón Guardar -->
                        <input class="form-control" type="submit" value="Guardar">
                        </form>
                    </div>    
            </div>
        </div>
    
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
        <script src="js/chairs.js"></script>
    </body>
</html>
