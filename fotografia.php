<?php 
$clSection = "header-sticky";
include_once "header.php";
?>

    <section class="hero hero-pages d-flex position-relative align-items-center" id="bg-fotografia">
        <div class="container-fluid position-relative">
            <div class="hero-title">
                <h2 class="white">FOTOGRAFÍA</h2>
            </div>
             <div class="hero-subtitle">
                <h5>En Kamo Eventos hacemos que tu fiesta sea una experiencia inolvidable, con equipos de alta tecnología y personal experto en la ejecución de eventos</h5>
            </div>
        </div>
    </section>

    <section class="section-video">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <iframe class="video-iframe" src="https://www.youtube.com/embed/10lQyCOdfng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <section class="service-features section-padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-6 order-1 order-md-1">
                    <h2>MONTAJE PROFESIONAL</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, perferendis quibusdam? Sint sit molestias voluptatum vero ducimus exercitationem laudantium laboriosam quod cupiditate culpa rerum ipsam tenetur, consequatur et quo consequuntur!</p>
                </div>
                <div class="col-12 col-md-6 order-2 order-md-2">
                    <img src="src/img/montaje-profesional.png" alt="" class="img-fluid">
                </div>
                <div class="col-12 col-md-6 order-3 order-md-4 mt-5">
                        <h2>MONTAJE PROFESIONAL</h2>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minus, perferendis quibusdam? Sint sit molestias voluptatum vero ducimus exercitationem laudantium laboriosam quod cupiditate culpa rerum ipsam tenetur, consequatur et quo consequuntur!</p>
                </div>
                <div class="col-12 col-md-6 order-4 order-md-3 mt-5">
                    <img src="src/img/dj-animador.png" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <section class="sound-slider text-center">
        <h3 class="pb-5">Siguenos en <a href="https://instagram.com/kamoeventos/" target="_blank">Instagram</a></h3>
        <!-- LightWidget WIDGET --><iframe src="//lightwidget.com/widgets/fc699e71db6753688ffa3f7e8cd9d31e.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
    </section>
    <section class="advisory text-center section-padding">
        <div class="container">
            <div class="advisory-title">
                <h3>¿No sabes qué necesitas para tu evento?</h3>
            </div>
            <div class="advisory-subtitle">
                <p>En Kamo Eventos te asesoramos sin costo</p>
            </div>
            <div class="advisory-button">
                <a href="cotizar.php?servicio=fotografia" class="btn btn-green"><span class="position-relative">COTIZAR MI EVENTO</span></a>
            </div>
        </div>
    </section>
    <section class="text-center add-services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>OTROS SERVICIOS</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-6">
                    <div class="item-service d-flex flex-column justify-content-center align-items-center" id="interior-sonido">
                        <i class="fas fa-lightbulb"></i>
                        <h3 class="mt-3 mb-4">SONIDO</h3>
                        <a href="sonido.php" class="btn btn-pink"><span class="position-relative">VER SERVICIO</span></a>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="item-service d-flex flex-column justify-content-center align-items-center" id="interior-iluminacion">
                        <i class="fas fa-lightbulb"></i>
                        <h3 class="mt-3 mb-4">ILUMINACIÓN</h3>
                        <a href="iluminacion.php" class="btn btn-pink"><span class="position-relative">VER SERVICIO</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<?php include_once "footer.php"; ?>