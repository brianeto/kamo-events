<?php 
include_once "header.php";
?>

    <section class="hero position-relative align-items-center" id="bg-contacto">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-title">
                            <h2 class="white">COTIZA AHORA</h2>
                        </div>
                        <div class="hero-subtitle">
                            <h5>En Kamo Eventos hacemos que tu fiesta sea una experiencia inolvidable, con equipos de alta tecnología y personal experto en la planeación y ejecución de eventos</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <section class="contact-page">
        <div class="row">
            <div class="col-12 col-md-6 box-padding order-2 order-md-1" id="contact-page">
                    <div class="contact-page-left-img-container">
                        <div>
                            <div class="text-center mb-5">
                                <img src="src/img/Logo-Kamo-blanco.png" alt="" >
                            </div> 
                            <div class="text-left">
                                <a href="mailto:hola@kamoeventos.com"><i class="far fa-envelope-open"></i>hola@kamoeventos.com</a>
                            </div>   
                            <div class="text-left">
                                <a href="https://wa.me/573102627655?text=Hola Kamo Eventos, estoy interesad@ en"><i class="fab fa-whatsapp"></i><span>3102627655 -</span></a><a href="https://wa.me/573102627655?text=Hola Kamo Eventos, estoy interesad@ en"><span>3102627655 -</span></a><a href="https://wa.me/573102627655?text=Hola Kamo Eventos, estoy interesad@ en"><span>3102627655</span></a>
                            </div>
                            <div class="text-left">
                                <a href="https://www.instagram.com/kamoeventos/"><i class="fab fa-instagram"></i>kamoeventos</a>
                            </div>
                            <div class="text-left">
                                <a href="https://www.facebook.com/Kamo-Eventos-301166994087711/"><i class="fab fa-facebook-f"></i>kamoeventos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-page-right-content box-padding col-12 col-md-6 order-1 order-md-2">
                    <div class="container text-center">
                        <div>
                            <div>
                                <h2>FORMULARIO</h2>
                                <form class="text-center" id="accordion" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                                        <input type="hidden" value="<?php echo $servicio; ?>" name="servicio_cotizado">
                                        <p>
                                            <a id="colapseonetrigger" class="btn btn-primary w-100 text-left colapse-div" data-parent="#accordion" data-toggle="collapse" data-target="#collapseone" href="#collapseone" aria-controls="collapseExample">
                                                TUS DATOS <i class="fa fa-minus"></i>
                                            </a>
                                        </p>
                                        <div class="collapse show" id="collapseone" role="tabpanel" >
                                            <div class="card card-block col-12">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" placeholder="Tu nombre (requerido)" name="nombre_cliente" required>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <input type="email" class="form-control" placeholder="Tu correo (requerido)" name="correo" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Tu télefono o celular (requerido)" name="telefono" required>
                                                </div>
                                            </div>
                                        </div>
                                        <p>
                                            <a id="colapsetwotrigger" class="btn btn-primary w-100 text-left colapse-div" data-parent="#accordion" data-toggle="collapse" ata-target="#collapsetwo" href="#collapsetwo" aria-controls="collapseExample">
                                                SOBRE TU EVENTO<i class="fa fa-plus"></i>
                                            </a>
                                        </p>
                                        <div class="collapse indent" id="collapsetwo">
                                                <div class="card card-block col-12">
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 text-left">
                                                            <label for="selectAssistants"><a>Cantidad de asistentes</a></label>
                                                            <input type="number" class="form-control" name="cant_asistentes" id="selectAssistants" placeholder="Escribe el número de asistentes">
                                                        </div>
                                                        <div class="form-group col-md-6 text-left">
                                                            <label for="selectType"><a>Tipo de recinto</a></label>
                                                            <select class="form-control" id="selectType" name="recinto">
                                                                <option value="abierto">Abierto</option>
                                                                <option value="cerrado">Cerrado</option>
                                                                <option value="otro">Otro</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label for="motivo"><a>Motivo</a></label>
                                                        <input type="text" id="motivo" name="motivo" class="form-control" placeholder="15 años, matrimonio, fiesta empresarial, cumpleaños, etc...">
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label for="fecha"><a>Fecha del evento</a></label>
                                                        <input type="date" class="form-control no-spin" placeholder="15 Marzo de 2019" id="fecha" name="fecha">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6 text-left">
                                                            <label for="hora_inicio"><a>Horario del evento</a></label>
                                                            <p>Inicia</p>
                                                            <input type="time" class="form-control inicia-spin" placeholder="Inicia" id="hora_inicio" name="hora_inicio">
                                                        </div>
                                                        <div class="form-group col-md-6 text-left">
                                                            <label for="hora_fin" class="pt-3"></label>
                                                            <p>Finaliza</p>
                                                            <input type="time" class="form-control finaliza-spin" placeholder="Finaliza" id="hora_fin" name="hora_fin">
                                                        </div>
                                                        <div class="form-group text-center w-100">
                                                                <label><a>Añade servicios a tu cotización</a></label>
                                                            
                                                                <div class="form-check">
                                                                    <?php
                                                                        if ($servicio == 'sonido') {
                                                                            echo "<input class='form-check-input' type='checkbox' id='fotografia' name='fotografia' value='1'>
                                                                            <label class='form-check-label mr-5' for='fotografia'>
                                                                            Fotografía 
                                                                            </label>
                                                                            <input class='form-check-input' type='checkbox' id='iluminacion' name='iluminacion' value='1'>
                                                                            <label class='form-check-label' for='iluminacion'>
                                                                            Iluminación
                                                                            </label>";
                                                                        } elseif ($servicio == 'fotografia'){
                                                                            echo "<input class='form-check-input' type='checkbox' id='sonido' name='sonido' value='1'>
                                                                            <label class='form-check-label mr-5' for='sonido'>
                                                                            Sonido 
                                                                            </label>
                                                                            <input class='form-check-input' type='checkbox' id='iluminacion' name='iluminacion' value='1'>
                                                                            <label class='form-check-label' for='iluminacion'>
                                                                            Iluminación
                                                                            </label>";
                                                                        } else {
                                                                            echo "<input class='form-check-input' type='checkbox' id='sonido' name='sonido' value='1'>
                                                                            <label class='form-check-label mr-5' for='sonido'>
                                                                            Sonido 
                                                                            </label>
                                                                            <input class='form-check-input' type='checkbox' id='fotografia' name='fotografia' value='1'>
                                                                            <label class='form-check-label' for='fotografia'>
                                                                            Fotografía
                                                                            </label>";
                                                                        }
                                                                    ?>
                                                                    
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="confirmation">
                                            <?php if (!empty($success)): ?>
                                                <div class="alert alert-success" role="alert"><?php echo $success; ?></div>
                                            <?php endif ?>

                                            <?php if (!empty($errores)): ?>
                                                <div class="alert alert-danger" role="alert"><?php echo $errores; ?></div>
                                            <?php endif ?>
                                        </div>
                                        <button type="submit" class="btn btn-pink">
                                            <span class="btn-text">COTIZAR</span>
                                        </button>
                                        <div>
                                            <p>Al Enviar el mensaje aceptas los <a href="#">Terminos y Condiciones</a></p>
                                        </div>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
        </div>
            
        </section>

<?php include_once "footer.php"; ?>