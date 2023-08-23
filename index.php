<?php include("includes/navbar.php") ?>
<?php include("includes/carrusel.php") ?>

<?php
$json_areas = file_get_contents('data/areasTrabajo.json');
$data_areas = json_decode($json_areas, true);
$areas = $data_areas['areas'];

$json_profesionales = file_get_contents('data/profesionales.json');
$data_profesionales = json_decode($json_profesionales, true);
$profesionales = $data_profesionales['profesionales'];
?>




<!-- Fact Start -->
<div class="fact">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-4.png" alt="Icon">
                    <h2>Equipo Calificado</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-1.png" alt="Icon">
                    <h2>Enfoque Personalizado</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-8.png" alt="Icon">
                    <h2>Resolución Eficiente</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="fact-item">
                    <img src="img/icon-6.png" alt="Icon">
                    <h2>Soluciones Innovadoras</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact Start -->


<!-- About Start -->
<div class="about" id="quienes-somos">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="about-img">
                    <div class="about-img-1">
                        <img src="img/about-2.jpg" alt="Image">
                    </div>
                    <div class="about-img-2">
                        <img src="img/about-1.jpg" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-header">
                    <p>AREVALO ABOGADOS & AUDITORES</p>
                    <h2>13 años de experiencia</h2>
                </div>
                <div class="about-text">
                    <p class="descripcion-profesional">
                        Somos una firma conjunta de abogados y auditores financieros, con sede de trabajo en la ciudad de La Paz y con atención en todo el territorio nacional.
                    </p>
                    <p class="descripcion-profesional">
                        Contamos con una experiencia de 13 años en el mercado laboral de Bolivia, que brinda servicios legales y servicios financieros contables, requerido por personas naturales y jurídicas, con esmero, dedicación y responsabilidad, ante la presencia de conflictos donde ambas materias se presentan de forma conjunta y es necesario dar una solución al cliente que satisfaga sus intereses y expectativas.
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service" id="nuestros-servicios">
    <div class="container">
        <div class="section-header">
            <p>Consulting Services</p>
            <h2>Nuestros servicios</h2>
        </div>
        <div class="row">
            <?php foreach ($areas as $area) : ?>
                <?php $id = $area['id']; ?>
                <?php $imagen = $area['imagen']; ?>
                <?php $nombre = $area['nombre']; ?>
                <?php $descripcion = $area['descripcion']; ?>
                <?php include 'includes/area_card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <div class="feature-img">
                    <img src="img/business-man.png" alt="Image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="section-header">
                    <h2>Nuestra experiencia</h2>
                </div>
                <p class="descripcion-profesional">
                    En AREVALO ABOGADOS & AUDITORES, nuestra profunda experiencia se combina con un enfoque centrado en el cliente y un historial probado de éxitos. Nuestro equipo de expertos está dedicado a proporcionar soluciones efectivas y una comunicación abierta. Puedes confiar en nosotros para abordar tus necesidades legales y financieras con confianza, sabiendo que estamos comprometidos en lograr resultados concretos y satisfactorios.
                </p>
                <div class="row counters">
                    <div class="col-6">
                        <i class="fa fa-user"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">10</h2>
                            <p>Nuestros Expertos</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-users"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">20</h2>
                            <p>Nuestros Clientes</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-check"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">30</h2>
                            <p>Proyectos realizados</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <i class="fa fa-running"></i>
                        <div class="counters-text">
                            <h2 data-toggle="counter-up">40</h2>
                            <p>Proyectos en desarrollo</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->


<!-- Testimonial Start -->
<!-- <div class="testimonial">
    <div class="container">
        <div class="section-header">
            <p>Testimonial Carousel</p>
            <h2>100% Positive Customer Reviews</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <img src="img/testimonial-1.jpg" alt="Image">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-2.jpg" alt="Image">
                <p>
                    Phasellus pellentesque tempus pretium. Quisque in enim sit amet purus venenatis porttitor sed non velit. Vivamus vehicula finibus
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-3.jpg" alt="Image">
                <p>
                    Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
            <div class="testimonial-item">
                <img src="img/testimonial-4.jpg" alt="Image">
                <p>
                    Sed in lectus eu eros tincidunt cursus. Aliquam eleifend velit nisl. Sed et posuere urna, ut vestibulum massa. Integer quis magna
                </p>
                <h2>Client Name</h2>
                <h3>Profession</h3>
            </div>
        </div>
    </div>
</div> -->
<!-- Testimonial End -->


<!-- Team Start -->
<div class="team" id="nuestro-equipo">
    <div class="container">
        <div class="section-header">
            <h2>Nuestro equipo de profesionales</h2>
        </div>
        <div class="row">
            <?php foreach ($profesionales as $profesional) : ?>
                <?php $id = $profesional['id']; ?>
                <?php $imagen = $profesional['imagen']; ?>
                <?php $nombre = $profesional['nombre']; ?>
                <?php $descripcion = $profesional['descripcion']; ?>
                <?php include 'includes/profesional_card.php'; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Contact Start -->
<div class="contact" id="contacto">
    <div class="container">
        <div class="section-header">
            <p>Contactanos</p>
            <h2>Atendemos todas tus consultas</h2>
        </div>
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-map-marker-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Nuestra dirección</h3>
                        <p>La Paz</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-phone-alt"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Llamanos al</h3>
                        <p>+591 76543210</p>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <h3>Escribemos al</h3>
                        <p>info@arevalo.com</p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Tu correo" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Especialidad" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessageButton">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Footer Start -->
<?php include("includes/footer.php") ?>