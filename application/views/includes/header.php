<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $nosotros->nombre ?> by Meows-R-Us</title>
        <link href="<?= base_url('css/bootstrap-' . $nosotros->tema . '.css') ?>" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('js/jquery.nailthumb.1.1.js') ?>"></script>
        <script type="text/javascript">
            $(function() {
                $('.fotoperfil').nailthumb({width: 350, height: 350, containerClass: 'img-rounded', method: 'resize'});
                $('.fotolistado').nailthumb({width: 150, height: 150, containerClass: 'img-circle'});
                $('.logo').nailthumb({width: 500, height: 200, method: 'resize'});
            });
        </script>
        <style>
            .centrado {
                width: 400px;
                margin: 0px auto;
            }

            .footer {
                padding-top: 50px;
            }
            .botonadopcion {
                padding-top: 25px;
            }
        </style>
    </head>
    <body>
        <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    appId: '<?= FB_APPID ?>',
                    status: true,
                    xfbml: true
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/all.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="container">
            <div class="row centrado logo">
                <img src="<?= base_url('css/img/logo.png') ?>"/>
            </div>
            <div class="row navbar navbar-default" role="navigation">
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?= site_url('gatos') ?>">Nuestros Gatos</a></li>
                        <li><a href="#">Últimas adopciones</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="<?= site_url('nosotros') ?>">Nosotros</a></li>
                    </ul>
                </div>
            </div>