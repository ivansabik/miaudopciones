<?php defined("BASEPATH") or exit("No direct script access allowed");

  class Migrate extends CI_Controller {

    public function index() {
        if (ENVIRONMENT == 'development') {
            $this->load->library('migration');
            if (!$this->migration->current()) {
                show_error($this->migration->error_string());
            } else {
                
                
                
                
                echo "Listo";
            }
        } else {
            echo "Ambiente no es de desarrollo (Checar en config que ENVIRONMENT = 'development')";
        }
    }

}

?>