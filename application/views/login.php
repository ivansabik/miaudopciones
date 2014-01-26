<?php $this->load->view('includes/header'); ?>
<div class="container">
    <form action="http://localhost/meows-r-us/src/index.php/login/auth" method="POST" role="form"> 
        <div class="form-group">
            <label>Usuario</label>
            <input type="text" class="form-control" name="usuario">
        </div>
        <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="hashim">
        </div>
        <button type="submit" class="btn btn-default">Entrar</button>
    </form>
</div>
<?php $this->load->view('includes/footer'); ?>