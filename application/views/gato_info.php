<?php $this->load->view('includes/header'); ?>
<div class="row">
    <div class="col-md-6">
        <h1><?= $gato->nombre ?></h1>
        <div class="fb-like" data-href="<?= base_url('index.php/gatos/ver/' . $gato->id) ?>" data-send="false" data-layout="button_count" data-width="70" data-show-faces="false"></div>
        <div class="fotoperfil">
            <img src="<?= $gato->urlFoto ?>"/>
        </div>
    </div>
    <div class="col-md-6">
        <h3>Alias</h3>
        <p><?= $gato->alias ?></p>
        <h3>Edad</h3>
        <p><?= $gato->getTextoEdad() ?></p>
        <h3>Color</h3>
        <p><?= $gato->color ?></p>
        <h3>Raza</h3>
        <p><?= $gato->raza ?></p>
        <h3>Descripcion</h3>
        <p><?= $gato->descripcion ?></p>
        <h3>Historia médica</h3>
        <p><?= $gato->historiaMedica ?></p>
        <h3>Sexo</h3>
        <p><?= $gato->getTextoSexo() ?></p>
        <div class="botonadopcion">
            <a href="#" class="btn btn-default">Llenar solicitud de adopción</a>
        </div>
    </div>
</div>
<div class="row">
    <h3>Fotos</h3>
</div>
<div class="row">
    <h3>Comentarios</h3>
    <div class="fb-comments" data-href="<?= base_url('index.php/gatos/ver/' . $gato->id) ?>" data-numposts="5" data-colorscheme="light"></div>
</div>
<?php $this->load->view('includes/footer'); ?>