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

    function __construct() {
        parent::__construct();
    }

    function findAll() {
        $query = $this->db->query('SELECT id, nombre, alias, edad, color, raza, descripcion, sexo, historiaMedica FROM gatos');
        $listaGatos = array();
        // TODO Refactor porque nombres atributos = nombres bd 
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
            $listaGatos[] = $gato;
        }
        return $listaGatos;
    }

    function find($id) {
        $query = $this->db->query('SELECT id, nombre, alias, edad, color, raza, descripcion, sexo, historiaMedica FROM gatos WHERE id=' . $id);
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
            'historiaMedica' => $this->historiaMedica
        );
        $this->db->insert('gatos', $data);
    }

    function delete($id) {
        $query = $this->db->query('DELETE FROM gatos WHERE id=' . $id);
    }

}
