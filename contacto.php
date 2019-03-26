<?php include_once "header.php" ?>

    <section class="hero h-100 d-flex position-relative align-items-center" id="bg-contacto">
            <div class="hero-div-diagonal"></div>
            <div class="container-fluid position-relative">
                <div class="hero-title">
                    <h2 class="white">COTIZA AHORA</h2>
                </div>
                 <div class="hero-subtitle">
                    <h5>En Kamo Eventos hacemos que tu fiesta sea una experiencia inolvidable, con equipos de alta tecnología y personal experto en la planeación y ejecución de eventos</h5>
                </div>

            </div>
        </section>
    <section class="contact-page col-lg-12">
            <div class="contact-page-left-img col-lg-6">
                <div class="contact-page-left-img-container">
                    <div>
                        <div class="text-center">
                            <img src="src/img/Logo-Kamo-blanco.png" alt="">
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
            <div class="contact-page-right-content col-lg-6">
                <div class="container text-center">
                    <div>
                        <div>
                            <h2>FORMULARIO</h2>
                            <form class="text-center" id="accordion">
                                    <p>
                                        <a id="colapseonetrigger" class="btn btn-primary w-100 text-left colapse-div" data-parent="#accordion" data-toggle="collapse" data-target="#collapseone" href="#collapseone" aria-controls="collapseExample">
                                            TUS DATOS <i class="fa fa-minus"></i>
                                        </a>
                                    </p>
                                    <div class="collapse show" id="collapseone" role="tabpanel" >
                                        <div class="card card-block col-12">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <input type="text" class="form-control" placeholder="Tu nombre">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <input type="email" class="form-control" placeholder="Tu correo">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Tu télefono o celular">
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
                                                        <select class="form-control" id="selectAssistants">
                                                          <option>1 a 100</option>
                                                          <option>101 a 200</option>
                                                          <option>201 a 300</option>
                                                          <option>301 a 400</option>
                                                          <option>Más de 400</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6 text-left">
                                                        <label for="selectType"><a>Tipo de recinto</a></label>
                                                        <select class="form-control" id="selectType">
                                                            <option>Abierto</option>
                                                            <option>Cerrado</option>
                                                            <option>Otro</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group text-left">
                                                    <label><a>Motivo</a></label>
                                                    <input type="text" class="form-control" placeholder="15 años, matrimonio, fiesta empresarial, cumpleaños, etc...">
                                                </div>
                                                <div class="form-group text-left">
                                                    <label><a>Fecha del evento</a></label>
                                                    <input type="date" class="form-control no-spin" placeholder="15 Marzo de 2019">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6 text-left">
                                                        <label><a>Horario del evento</a></label>
                                                        <p>Inicia</p>
                                                        <input type="time" class="form-control inicia-spin" placeholder="Inicia">
                                                    </div>
                                                    <div class="form-group col-md-6 text-left">
                                                        <label class="pt-3"></label>
                                                        <p>Finaliza</p>
                                                        <input type="time" class="form-control finaliza-spin" placeholder="Finaliza">
                                                    </div>
                                                    <div class="form-group text-center w-100">
                                                            <label><a>Añade servicios a tu cotización</a></label>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                <label class="form-check-label mr-5" for="gridCheck">
                                                                Fotografía 
                                                                </label>
                                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                                <label class="form-check-label" for="gridCheck">
                                                                Iluminación
                                                                </label>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>
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
        </section>

<?php include_once "footer.php" ?>