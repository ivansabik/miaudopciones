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
  
  
  
}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
