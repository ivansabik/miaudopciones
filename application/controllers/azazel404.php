<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Azazel404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['nosotros'] = $this->InfoNosotros->find();
        $this->load->view('azazel404', $data);
    }

}

/* End of file azazel404.php */
/* Location: ./application/controllers/azazel404.php */
