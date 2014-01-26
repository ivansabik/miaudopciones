<?php $this->load->view('includes/header'); ?>
<div class="container">
    <h1><?= $gato->nombre ?></h1>
    <?php
    echo '
          <img src="' . $gato->urlFoto . '" height="100" width="100"/>
          <h4>Alias: ' . $gato->alias . '</h4>
          <h4>Edad: ' . $gato->edad . '</h4>
          <h4>Color: ' . $gato->color . '</h4>
          <h4>Raza: ' . $gato->raza . '</h4>
          <h4>Descripcion: ' . $gato->descripcion . '</h4>
          <h4>Historia médica: ' . $gato->historiaMedica . '</h4>
          <h4>Sexo: ' . $gato->sexo . '</h4>';
    ?>
</tbody>
</table>
<?php $this->load->view('includes/footer'); ?>