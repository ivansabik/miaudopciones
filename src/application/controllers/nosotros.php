<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nosotros extends CI_Controller {
  public function index() {
    // Carga gatos
    $this->load->database();
    $this->load->model('InfoNosotros');
    // Pasa modelo a vista
    $data['nosotros'] = $this->InfoNosotros->find();
    // Despliega vista
    
    $this->load->view('nosotros_ver',$data);
    
  }
}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
