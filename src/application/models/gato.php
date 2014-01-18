<?php

class Gato extends CI_Model {
	public $intId;
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
        $query = $this->db->query('SELECT id, nombre, aka, edad, color, raza, descripcion, sexo, historia_medica FROM gatos');
        $resultados = $query->result();
		$listaGatos = array();
		foreach ($query->result() as $row)
		{	
			$gato = new Gato;
			$gato->intId=$row->id;
			$gato->strNombre=$row->nombre;
			$gato->strAka=$row->aka;
			$gato->intEdad=$row->edad;
			$gato->strColor=$row->color;
			$gato->strRaza=$row->raza;
			$gato->strDescripcion=$row->descripcion;
			$gato->boolSexo=$row->sexo;
			$gato->strHistoriaMedica=$row->historia_medica;
			$listaGatos[]=$gato;
		}
		
        return $listaGatos;
    }
	
     function find($id) {
        $query = $this->db->query('SELECT id, nombre, aka, edad, color, raza, descripcion, sexo, historia_medica FROM gatos WHERE id='.$id);
		$resultado = $query->row();
		$gato = new Gato;
		$gato->intId=$resultado->id;
		$gato->strNombre=$resultado->nombre;
		$gato->strAka=$resultado->aka;
		$gato->intEdad=$resultado->edad;
		$gato->strColor=$resultado->color;
		$gato->strRaza=$resultado->raza;
		$gato->strDescripcion=$resultado->descripcion;
		$gato->boolSexo=$resultado->sexo;
		$gato->strHistoriaMedica=$resultado->historia_medica;
        return $gato;
    }

    function insert(){

          $data = array(
          'nombre' => $this->strNombre ,
          'aka' => $this->strAka ,
          'edad' => $this->intEdad ,
          'color' => $this->strColor ,
          'raza' => $this->strRaza ,
          'descripcion' => $this->strDescripcion ,
          'sexo' => $this->boolSexo ,
          'historia_medica' => $this->strHistoriaMedica
          );

          $this->db->insert('gatos', $data); 

    }

}
