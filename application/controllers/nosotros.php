<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Nosotros extends CI_Controller {

    public function index() {
        $data['nosotros'] = $this->InfoNosotros->find();
        $this->load->view('nosotros_ver', $data);
    }

}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */