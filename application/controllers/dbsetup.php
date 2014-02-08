<?php

defined("BASEPATH") or exit("No direct script access allowed");

class DBSetup extends CI_Controller {

    public function index() {
        if (ENVIRONMENT == 'development') {
            $this->load->library('migration');
            if (!$this->migration->current()) {
                show_error($this->migration->error_string());
            } else {
                echo "Listo";
            }
        } else {
            echo "Ambiente no es de desarrollo (Checar en config que ENVIRONMENT = 'development')";
        }
    }

    public function datosPrueba() {
        if (ENVIRONMENT == 'development') {
            $this->InfoNosotros->nombre = 'Botitas mojadas';
            $this->InfoNosotros->descripcion = 'Somos una AC que rescata mininos sin hogar';
            $this->InfoNosotros->lat = 19.396304;
            $this->InfoNosotros->lon = -99.188637;
            $this->InfoNosotros->usuario = 'admin';
            $this->InfoNosotros->hashim = '6ebc2fa1dad8bdb79358b156961b46a54ef2888a'; // = sha1(botitas)
            $this->InfoNosotros->mail = 'botitas.mojadas@yimeil.com';
            $this->InfoNosotros->fb = 'botitas.mojadas';
            $this->InfoNosotros->telCel = '5536744626';
            $this->InfoNosotros->telFijo = '5552925474';
            $this->InfoNosotros->tema = 1;
            $this->InfoNosotros->insert();
			
            $this->load->model('Gato');
            $this->Gato->nombre = 'Santino';
            $this->Gato->alias = 'botas, botitas, schweni, titino';
            $this->Gato->edad = '36';
            $this->Gato->color = 'atrigrado con guantes, bozal y botas blancas';
            $this->Gato->raza = 'criollo';
            $this->Gato->sexo = 1;
            $this->Gato->urlFoto = 'https://scontent-a-dfw.xx.fbcdn.net/hphotos-prn2/t1/q74/s720x720/1555523_10201916078198422_95561984_n.jpg';
            $this->Gato->insert();

            $this->Gato->nombre = 'Lester';
            $this->Gato->alias = 'porky, lesterpork';
            $this->Gato->edad = '24';
            $this->Gato->color = 'atrigrado tabby';
            $this->Gato->raza = 'criollo';
            $this->Gato->sexo = 1;
            $this->Gato->urlFoto = 'https://fbcdn-sphotos-d-a.akamaihd.net/hphotos-ak-frc1/t1/q82/s720x720/599705_10201674316874540_1491042760_n.jpg';
            $this->Gato->insert();

            $this->Gato->nombre = 'Mateo';
            $this->Gato->alias = 'maarty, mortimer, mortius';
            $this->Gato->edad = '45';
            $this->Gato->color = 'blanco con crema';
            $this->Gato->raza = 'persa';
            $this->Gato->sexo = 1;
            $this->Gato->urlFoto = 'https://fbcdn-sphotos-e-a.akamaihd.net/hphotos-ak-prn2/t1/q77/s720x720/1511396_10201791204836666_1802049469_n.jpg';
            $this->Gato->insert();

            $this->Gato->nombre = 'Brayan Malik';
            $this->Gato->alias = 'malkie';
            $this->Gato->edad = '18';
            $this->Gato->color = 'atrigrado tabby';
            $this->Gato->raza = 'criollo';
            $this->Gato->sexo = 1;
            $this->Gato->urlFoto = 'https://scontent-b-dfw.xx.fbcdn.net/hphotos-ash3/t1/73652_10150307356490137_3919922_n.jpg';
            $this->Gato->insert();

            $this->Gato->nombre = 'Valentina';
            $this->Gato->alias = 'napolitana, napa, naples';
            $this->Gato->edad = '45';
            $this->Gato->color = 'crema, gris y blanco';
            $this->Gato->raza = 'persa';
            $this->Gato->sexo = 0;
            $this->Gato->urlFoto = 'https://fbcdn-sphotos-f-a.akamaihd.net/hphotos-ak-frc3/t1/481502_10151394221425120_992162879_n.jpg';
            $this->Gato->insert();
			
			
            //$this->load->model('Adoptante');
            //$this->load->model('Adopcion');
            //$this->load->model('FotoGato');

            echo "Listo";
        } else {
            echo "Ambiente no es de desarrollo (Checar en config que ENVIRONMENT = 'development')";
        }
    }

}
