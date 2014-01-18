<?php

class Gato extends CI_Model {
    public $strNombre;
    public $strAka;
    public $intEdad;
    public $strColor;
    public $strRaza;
    public $strDescripcion;
    public $boolSexo;
    public $strHistoriaMedica;

    function __construct() {
        parent::__construct();
    }

    function findAll() {
        $query = $this->db->query('SELECT id, nombre, edad, color, raza, descripcion, sexo, historia_medica FROM gatos');
        $resultados = $query->result();
        return $resultados;
    }

}
