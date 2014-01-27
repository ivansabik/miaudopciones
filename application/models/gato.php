<?php

class Gato extends CI_Model {

    public $id;
    public $nombre;
    public $alias;
    public $edad; // En meses
    public $color;
    public $raza;
    public $descripcion;
    public $sexo;
    public $historiaMedica;
    public $urlFoto;

    function __construct() {
        parent::__construct();
    }

    function findAll() {
        $query = $this->db->get('gatos');
        $gatos = array();
        foreach ($query->result() as $row) {
            $gato = new Gato;
            $gato->id = $row->id;
            $gato->nombre = $row->nombre;
            $gato->alias = $row->alias;
            $gato->edad = $row->edad;
            $gato->color = $row->color;
            $gato->raza = $row->raza;
            $gato->descripcion = $row->descripcion;
            $gato->sexo = $row->sexo;
            $gato->historiaMedica = $row->historiaMedica;
            $gato->urlFoto = $row->urlFoto;
            $gatos[] = $gato;
        }
        return $gatos;
    }

    function find($id) {
        $query = $this->db->query('SELECT * from gatos WHERE id=' . $id);
        $resultado = $query->row();
        $gato = new Gato;
        $gato->id = $resultado->id;
        $gato->nombre = $resultado->nombre;
        $gato->alias = $resultado->alias;
        $gato->edad = $resultado->edad;
        $gato->color = $resultado->color;
        $gato->raza = $resultado->raza;
        $gato->descripcion = $resultado->descripcion;
        $gato->sexo = $resultado->sexo;
        $gato->historiaMedica = $resultado->historiaMedica;
        $gato->urlFoto = $resultado->urlFoto;
        return $gato;
    }

    function insert() {
        $data = array(
            'nombre' => $this->nombre,
            'alias' => $this->alias,
            'edad' => $this->edad,
            'color' => $this->color,
            'raza' => $this->raza,
            'descripcion' => $this->descripcion,
            'sexo' => $this->sexo,
            'historiaMedica' => $this->historiaMedica,
            'urlFoto' => $this->urlFoto
        );
        $this->db->insert('gatos', $data);
    }

    function delete($id) {
        $this->db->delete('gatos', array('id' => $id));
    }

    function getFotos() {
        $query = $this->db->query('SELECT * from fotosGatos WHERE id=' . $this->id);
        $fotos = array();
        foreach ($query->result() as $row) {
            $foto = new FotoGato;
            $foto->id = $row->id;
            $foto->descripcion = $row->descripcion;
            $foto->url = $row->url;
            $fotos[] = $foto;
        }
        return $fotos;
    }

    function getTextoEdad() {
        $textoEdad = '';
        $numAnios = ceil($this->edad / 12);
        $numMeses = $this->edad % 12;
        if ($numAnios > 0) {
            $textoEdad.= $numAnios . ' anios ';
        }
        if ($numMeses > 0) {
            $textoEdad.= $numMeses . ' meses';
        }
        return $textoEdad;
    }

    function getTextoSexo() {
        if ($this->sexo == 1)
            return 'Macho';
        return 'Hembra';
    }

}
