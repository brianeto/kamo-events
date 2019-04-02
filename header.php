<!DOCTYPE html>
<html lang="es_CO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamo Eventos - Sonido/Fotografía/Iluminación</title>
    <link href="src/css/bootstrap.css" rel="stylesheet">
    <link href="src/css/fontawesome-all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/slick.css"/>
    <link rel="stylesheet" href="src/css/slick-theme.css"/>
    <link rel="stylesheet" href="src/css/lightbox.css">   
    <link href="src/css/style.css" rel="stylesheet">
</head>
<body id="<?php echo $idSection ?>">
    <header class="<?php echo $clSection; ?>">
        <div class="container-fluid">
            <div class="row justify-content-between align-items-center">
                <div class="col-6 col-md-1">
                    <div class="header-logo">
                        <a href="index.php"><img src="src/img/Logo-Kamo-blanco.png" alt="logo-kamo" class="img-fluid"></a>
                    </div>
                </div>

                <div class="col-3 col-md-1 button-nav">
                    <i class="fas fa-ellipsis-v"></i>
                </div>
            </div>
        </div>
        
        <div class="header-menu">
            <nav class="header-menu-nav">
                <ul class="nav flex-column">
                    <li class="nav-item"><a href="index.php" class="nav-link">INICIO</a></li>
                    <li class="nav-item"><a href="index.php#sobre-nosotros" class="nav-link">SOBRE NOSOTROS</a></li>
                    <li class="nav-item"><a href="index.php#servicios" class="nav-link">SERVICIOS</a></li>
                    <li class="nav-item d-none"><a href="#" class="nav-link">ALQUILER DE EQUIPOS</a></li>
                    <li class="nav-item"><a href="index.php#galeria" class="nav-link">GALERÍA</a></li>
                    <li class="nav-item"><a href="index.php#testimonios" class="nav-link">TESTIMONIOS</a></li>
                    <li class="nav-item d-none"><a href="#" class="nav-link">BLOG</a></li>
                    <li class="nav-item"><a href="index.php#contactanos" class="nav-link">CONTÁCTANOS</a></li>
                </ul>
            </nav>

            <div class="menu-nav-social mt-5">
                    <ul class="nav">
                        <li class="nav-item"><a href="https://www.facebook.com/Kamo-Eventos-301166994087711/" target="__blank" class="nav-link"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item"><a href="https://www.instagram.com/kamoeventos/" target="__blank" class="nav-link"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item"><a href="https://wa.me/573102627655?text=Hola Kamo Eventos, estoy interesad@ en" target="__blank" class="nav-link"><i class="fab fa-whatsapp"></i></a></li>
                        <li class="nav-item"><a href="mailto:hola@kamoeventos.com" class="nav-link"><i class="far fa-envelope-open"></i></a></li>
                    </ul>
            </div>
        </div>
    </header>