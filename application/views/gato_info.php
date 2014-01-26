<?php $this->load->view('includes/header'); ?>
<div class="container">
    <h1><?= $gato->nombre ?></h1>
    <img src="<?= $gato->urlFoto ?>" height="250" width="250" class="img-rounded"/>
    <h4>Alias</h4>
    <?= $gato->alias ?>
    <h4>Edad</h4>
    <?= $gato->edad ?>
    <h4>Color</h4>
    <?= $gato->color ?>
    <h4>Raza</h4>
    <?= $gato->raza ?>
    <h4>Descripcion</h4>
    <?= $gato->descripcion ?>
    <h4>Historia médica</h4>
    <?= $gato->historiaMedica ?>
    <h4>Sexo</h4>
    <?= $gato->sexo ?>
    <p>
        <a href="#" class="btn btn-default">Llenar solicitud de adopción</a>
    </p>
</div>
<?php $this->load->view('includes/footer'); ?>