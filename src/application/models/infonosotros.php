<?php

class InfoNosotros extends CI_Model {

    public $nombre;
    public $descripcion;
    public $lat;
    public $lon;

    function __construct() {
        parent::__construct();
    }

    function find() {
        $query = $this->db->query('SELECT nombre, descripcion, lat, lon FROM infoNosotros');
        $resultados = $query->result();
        $infoNosotros = new InfoNosotros;
        $infoNosotros->nombre = $resultados->nombre;
        $infoNosotros->descripcion = $resultados->descripcion;
        $infoNosotros->lat = $resultados->lat;
        $infoNosotros->lon = $resultados->lon;

        return $infoNosotros;
    }

    function auth($usuario, $hashim) {
        $usuario = $this->db->escape($usuario);
        $hashim = $this->db->escape($hashim);
        $query = $this->db->query("SELECT usuario, hashim FROM infoNosotros WHERE usuario='" . $usuario . " AND hashim='" . $hashim . "");
        $resultado = $query->row();
        if ($resultado) {
            return true;
        }
        return false;
    }

}
