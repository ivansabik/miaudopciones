<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gatos extends CI_Controller {

  public function index() {
		
			// Carga gatos
			$this->load->database();
			$this->load->model('Gato');
			// Pasa modelo a vista
			$data['gatos'] = $this->Gato->findAll();
			// Despliega vista
			$this->load->view('gatos', $data);
		
  }
  
  
  public function ver($id) {
			// Carga gatos
			$this->load->database();
			$this->load->model('Gato');
			// Pasa modelo a vista
			$data['gato'] = $this->Gato->find($id);
			// Despliega vista
			$this->load->view('gato_info', $data);
  }
  
  public function agregar(){
     
     if($this->input->post('envioFormulario')){
        
     $this->load->database();
     $this->load->model('Gato');
     $this->Gato->strNombre=$this->input->post('nombre');
     $this->Gato->strAka=$this->input->post('alias');
     $this->Gato->intEdad=$this->input->post('edad');
     $this->Gato->strColor=$this->input->post('color');
     $this->Gato->strRaza=$this->input->post('raza');
     $this->Gato->strDescripcion=$this->input->post('descripcion');
     $this->Gato->boolSexo=$this->input->post('sexo');
     $this->Gato->strHistoriaMedica=$this->input->post('hmedica');
     $this->Gato->insert();
     $data['mensaje'] = 'Gato agregado: '.print_r($this->Gato);
     $this->load->view('resultado_operacion',$data); 
    }else{

     $this->load->view('gato_agregar'); 
    }
  }

  
  
}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
