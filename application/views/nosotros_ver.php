<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $nosotros->nombre ?> by Meows-R-Us</title>
        <link href="<?= base_url('css/bootstrap-' . $nosotros->tema . '.css') ?>" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        <script src="<?= base_url('js/gmaps.js') ?>"></script>
        <script src="<?= base_url('js/prettify.js') ?>"></script>
        <link href="<?= base_url('css/prettify.css') ?>" rel="stylesheet" type="text/css">
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
            #mapa {
                width: 500px;
                height: 500px;
            }
        </style>
        <script type="text/javascript">
            $(function() {
                var map = new GMaps({
                    div: '#mapa',
                    lat: <?= $nosotros->lat ?>,
                    lng: <?= $nosotros->lon ?>
                });
                map.addMarker({
                    lat: <?= $nosotros->lat ?>,
                    lng: <?= $nosotros->lon ?>
                });
            });
        </script>
    </head>
    <body>
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
            <div class="row">
                <div class="col-md-6">
                    <h1><?= $nosotros->nombre ?></h1>
                    <div class="like">
                        <div class="fb-like" data-href="<?= site_url('nosotros') ?>" data-send="false" data-layout="button_count" data-width="70" data-show-faces="false"></div>
                    </div>
                    <p><?= $nosotros->descripcion ?></p>
                    <h3>Correo electronico</h3>
                    <p><?= $nosotros->mail ?></p>
                    <h3>Telefonos</h3>
                    <p>Cel: <?= $nosotros->telCel ?></p>
                    <p>Fijo: <?= $nosotros->telFijo ?></p>
                    <h3>Facebook</h3>
                    <p><?= $nosotros->fb ?></p>
                </div>
                <div class="col-md-6">
                    <h3>Nuestra ubicacion</h3>
                    <div id="mapa"></div>
                </div>
            </div>
            <div class="footer centrado">
                <p>Servicio de Meows-R-Us</p>
            </div>
        </div>
    </body>
</html>