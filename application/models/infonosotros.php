<?php

class InfoNosotros extends CI_Model {

    public $nombre;
    public $descripcion;
    public $lat;
    public $lon;
    public $usuario;
    public $hashim;
    public $mail;
    public $fb;
    public $telCel;
    public $telFijo;
    public $tema;

    function __construct() {
        parent::__construct();
    }

    function find() {
        $query = $this->db->query('SELECT * FROM infoNosotros');
        $resultados = $query->row();
        $infoNosotros = new InfoNosotros;
        $infoNosotros->nombre = $resultados->nombre;
        $infoNosotros->descripcion = $resultados->descripcion;
        $infoNosotros->lat = $resultados->lat;
        $infoNosotros->lon = $resultados->lon;
        $infoNosotros->mail = $resultados->mail;
        $infoNosotros->fb = $resultados->fb;
        $infoNosotros->telCel = $resultados->telCel;
        $infoNosotros->telFijo = $resultados->telFijo;
        $infoNosotros->tema = $resultados->tema;
        return $infoNosotros;
    }

    function auth($usuario, $hashim) {
        $usuario = $this->db->escape($usuario);
        $hashim = sha1($this->db->escape($hashim));
        $query = $this->db->query("SELECT * FROM infoNosotros WHERE usuario='" . $usuario . " AND hashim='" . $hashim . "");
        $resultado = $query->row();
        if ($resultado) {
            return true;
        }
        return false;
    }

    function insert() {
        $data = array(
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'usuario' => $this->usuario,
            'hashim' => $this->hashim,
            'mail' => $this->mail,
            'fb' => $this->fb,
            'telCel' => $this->telCel,
            'telFijo' => $this->telFijo
        );
        $this->db->insert('infoNosotros', $data);
    }

    function save() {
        $data = array(
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'lat' => $this->lat,
            'lon' => $this->lon,
            'usuario' => $this->usuario,
            'hashim' => $this->hashim,
            'mail' => $this->mail,
            'fb' => $this->fb,
            'telCel' => $this->telCel,
            'telFijo' => $this->telFijo
        );
        $this->db->update('infoNosotros', $data, "1 = 1");
    }

}
