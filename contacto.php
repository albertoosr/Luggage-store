<?php require("header.php") ?>

<section id="nosotros">
    <div class="container p-5">
        <div class="mx-auto">
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
            <form method="POST" action="email.php">
                <div class="form-group">
                    <label for="name">Nombre(s) <small class="point-form">*</small></label>
                    <input type="text" class="form-control" required id="name" placeholder="name" name="nombre">
                </div>
                <div class="form-group">
                    <label for="phone">Numero de Telefono <small class="point-form">*</small></label>
                    <input type="text" class="form-control" required id="phone" placeholder="+52 7777 777 777" name="telefono" require>
                </div>
                <div class="form-group">
                    <label for="email">Correo Electronico <small class="point-form">*</small></label>
                    <input type="email" class="form-control" required id="email" placeholder="nombre@dominio.com" name="correo" require>
                </div>
                <div class="form-group">
                    <label for="captcha">Captcha <small class="point-form">*</small></label><br>
                    <img src="captcha.php" alt="">
                    <input type="text" class="form-control"  required id="captcha" placeholder="e2Re6T4tr" name="captcha" require>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción <small class="point-form">*</small></label>
                    <textarea class="form-control" id="descripcion" required rows="3" name="descripcion" require></textarea>
                </div>
                <div class="from-group">
                    <input type="submit" class="form-control btn btn-success" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</section>

<?php require("footer.php") ?>