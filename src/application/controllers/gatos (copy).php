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
}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
