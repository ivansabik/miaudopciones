<?php $this->load->view('includes/header'); ?>
<form action="<?= site_url('login/auth'); ?>" method="POST" role="form"> 
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" class="form-control" name="usuario">
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="pass">
    </div>
    <button type="submit" class="btn btn-default">Entrar</button>
</form>
<?php $this->load->view('includes/footer'); ?>