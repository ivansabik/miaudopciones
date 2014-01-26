<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Azazel404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->output->set_status_header('404');
        $this->load->helper('url');
        $this->load->view('azazel404');
    }

}

/* End of file azazel404.php */
/* Location: ./application/controllers/azazel404.php */
