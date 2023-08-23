<?php

$json_profesionales = file_get_contents('data/profesionales.json');
$data_profesionales = json_decode($json_profesionales, true);
$profesionales = $data_profesionales['profesionales'];

$id = $_GET['id'];

$carrera_seleccionado = null;
foreach ($profesionales as $profesional) {
    if ($profesional['id'] == $id) {
        $profesional_seleccionado = $profesional;
        break;
    }
}
?>

<?php include("includes/navbar.php") ?>

<!-- Feature Start -->
<div class="feature">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-4">
                <div class="feature-img">
                    <img src="img/profesionales/JavierArevalo2.png" alt="Image">
                </div>
            </div>
            <div class="col-md-8">
                <div class="section-header">
                    <h2><?php echo $profesional_seleccionado['nombre']; ?></h2>
                </div>
                <p class="descripcion-profesional">
                    <?php echo $profesional_seleccionado['contenido']; ?>
                </p>
                <!-- <div class="row counters">
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
                </div> -->
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<?php include("includes/footer.php") ?>