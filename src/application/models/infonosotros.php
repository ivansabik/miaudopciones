<?php

class InfoNosotros extends CI_Model {
    public $strNombre;
    public $strDescripcion;
    public $floatLat;
    public $floatLon;
    
    function __construct() {
        parent::__construct();
    }

    function find() {
        $query = $this->db->query('SELECT nombre, descripcion,lat, lon FROM info_nosotros');
        $resultados = $query->result();
        return $resultados;
    }

}
