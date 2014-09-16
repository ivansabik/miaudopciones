<?php $this->load->view('includes/header'); ?>
<h1>Nuestros gatos</h1>
<?php
if (count($gatos) == 0) {
    echo 'Por el momento no hay ningún minino en adopción';
} else {
    ?>
    <table class="table" width="50%">
        <thead>
            <tr>
                <th style="width: 20%"></th>
                <th style="width: 20%">Nombre</th>
                <th style="width: 20%">Edad</th>
                <th style="width: 40%">Sexo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($gatos as $gato) {
                ?>
                <tr>
                    <td><div class="fotolistado"><a href="<?= base_url('index.php/gatos/ver/' . $gato->id) ?>"><img src="<?= $gato->urlFoto ?>"/></a></div></td>
                    <td><a href="<?= base_url('index.php/gatos/ver/' . $gato->id) ?>"><?= $gato->nombre ?></a></td>
                    <td><?= $gato->getTextoEdad() ?></td>
                    <td><?= $gato->getTextoSexo() ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    <?php
}
?>
<?php $this->load->view('includes/footer'); ?>