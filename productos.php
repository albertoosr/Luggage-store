<?php require('header.php') ?>

<?php if (isset($_GET['email'])) : ?>
    <?php if ($_GET['email'] == 'enviado') : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Solicitud Enviado.
        </div>
    <?php else : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Lo sentimos, en este momento no podemos enviar tu solictud intentalo más tarde.
        </div>
    <?php endif ?>
<?php endif ?>

<section id="descripcion">

    <?php
    if (isset($_GET['id'])) {

        if ($_GET['id'] == 1) {  ?>

            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta rosa listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $55.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>


        <?php } else if ($_GET['id'] == 2) { ?>

            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta amarrilla listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $144.00 </p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($_GET['id'] == 3) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta gris listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $66.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($_GET['id'] == 4) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms4.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms4.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms4.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta cafe listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b>$35.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($_GET['id'] == 0) { ?>

        <?php } else if ($_GET['id'] == 5) { ?>

        <?php } else {
        }
        ?>

        <?php } else {
        $id = rand(1, 4);

        if ($id == 1) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta rosa listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $55.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($id == 2) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms2.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta amarrilla listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $144.00 </p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($id == 3) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms3.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta gris listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b> $66.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } else if ($id == 4) { ?>
            <div class="container py-5">
                <div class="row des-info">
                    <div class="col-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-75 mx-auto" src="img/ms1.png" alt="First slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="name">
                            <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                        </label>
                        <label for="name">
                            <p><b>Descripción: </b>Maleta cafe listo para tu vieja</p>
                        </label> <br>
                        <label for="name">
                            <p><b>Costo: </b>$35.00</p>
                        </label><br>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#comprar">
                            COMPRAR <i class="fas fa-shopping-cart"></i>
                        </button>
                    </div>
                </div><br>
                <div class="alert alert-info" role="alert">
                    ¡¡Estamos de oferta!! solor por hoy obten un 20% de descuento en tus compras.
                </div>

            </div>

        <?php } ?>

    <?php } ?>

</section>

<!-- product -->
<section id="product">
    <div class="container">
        <h2 class="titleproducts pb-5">Popular products</h2>
        <div class="row">
            <div class="col resposinve-div">
                <img class="msimg" src="img/ms1.png" alt="">
                <div class="card-body">
                    <p class="card-text">Travel Lock Tsa-Aproved Co..</p>
                    <div class="d-flex justify-content-center">
                        <small class="text-muted">$88.00 - $55.00</small>
                    </div><br>
                    <a href="productos.php?id=1" class="form-control btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col">
                <img class="msimg" src="img/ms2.png" alt="">
                <div class="card-body">
                    <p class="card-text">Travel Lock Tsa-Aproved Co..</p>
                    <div class="d-flex justify-content-center">
                        <small class="text-muted">$144.00 - $210.00</small>
                    </div><br>
                    <a href="productos.php?id=2" class="form-control btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col">
                <img class="msimg" src="img/ms3.png" alt="">
                <div class="card-body">
                    <p class="card-text">Travel Lock Tsa-Aproved Co..</p>
                    <div class="d-flex  justify-content-center">
                        <small class="text-muted">$88.00 - $66.00</small>
                    </div><br>
                    <a href="productos.php?id=3" class="form-control btn btn-success">Comprar</a>
                </div>
            </div>
            <div class="col">
                <img class="msimg" src="img/ms4.png" alt="">
                <div class="card-body">
                    <p class="card-text">Travel Lock Tsa-Aproved Co..</p>
                    <div class="d-flex justify-content-center">
                        <small class="text-muted">$35.00 - $36.00</small>
                    </div><br>
                    <a href="productos.php?id=4" class="form-control btn btn-success">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ventana modal -->
<div class="modal fade" id="comprar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Llena los campos correspondientes</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="emailproductos.php">
                        <div class="form-group">
                            <label for="name">Nombre(s) <small class="point-form">*</small></label>
                            <input type="text" class="form-control" required id="name" placeholder="name" name="nombre" require="">
                        </div>
                        <div class="form-group">
                            <label for="phone">Numero de Telefono <small class="point-form">*</small></label>
                            <input type="text" class="form-control" required id="phone" placeholder="+52 7777 777 777" name="telefono" require="">
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electronico <small class="point-form">*</small></label>
                            <input type="email" class="form-control" required id="email" placeholder="nombre@dominio.com" name="correo" require="">
                        </div>
                        <div class="form-group">
                            <label for="captcha">Captcha <small class="point-form">*</small></label><br>
                            <img src="captcha.php" alt="">
                            <input type="text" class="form-control" required id="captcha" placeholder="e2Re6T4tr" name="captcha" require="">
                        </div>
                        <div class="form-group">
                            <h5>Tu producto a comprar</h5>
                            <?php

                            if (isset($_GET['id'])) {

                                if ($_GET['id'] == 1) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta rosa listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $55.00</p>
                                    </label><br>

                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta rosa listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$55.00">

                                <?php  } else if ($_GET['id'] == 2) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta amarrilla listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $144.00 </p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta amarrilla listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$144.00">

                                <?php  } else if ($_GET['id'] == 3) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta gris listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $66.00</p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta gris listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$66.00">

                                <?php  } else if ($_GET['id'] == 4) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta cafe listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b>$35.00</p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta cafe listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$35.00">

                                <?php  } ?>

                                <?php  } else {
                                if ($id == 1) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta rosa listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $55.00</p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta rosa listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$55.00">

                                <?php } else if ($id == 2) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta amarrilla listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $144.00 </p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta amarrilla listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$144.00">

                                <?php } else if ($id == 3) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta gris listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b> $66.00</p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta gris listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$66.00">

                                <?php } else if ($id == 4) { ?>
                                    <label for="name">
                                        <p><b>Nombre del producto: </b>Travel Lock Tsa-Aproved Co..</p>
                                    </label>
                                    <label for="name">
                                        <p><b>Descripción: </b>Maleta cafe listo para tu vieja</p>
                                    </label> <br>
                                    <label for="name">
                                        <p><b>Costo: </b>$35.00</p>
                                    </label><br>
                                    <input type="text" class="productinfo" name="nombre" value="Travel Lock Tsa-Aproved Co..">
                                    <input type="text" class="productinfo" name="descrip" value="Maleta cafe listo para tu vieja">
                                    <input type="text" class="productinfo" name="costo" value="$35.00">

                                <?php } else {
                                } ?>
                            <?php } ?>
                        </div>
                        <div class="from-group">
                            <input type="submit" class="form-control btn btn-success" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
        </div>
    </div>
</div>

<?php require('footer.php') ?>