<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        // Auth si existe usuario loggeado
        $this->load->view('login');
    }

    public function auth() {
        $this->load->database();
        $this->load->model('infoNosotros');
        $usuario = $this->db->escape($this->input->post('usuario'));
        $hashim = $this->db->escape($this->input->post('hashim'));
        $usuario = $this->InfoNosotros->auth($usuario, $hashim);
        if ($usuario) {
            // Guarda en sesion
            $this->load->view('nosotros_editar');
        } else {
            $data['mensaje'] = 'Usuario o contrasenia invalidos';
            $this->load->view('resultado_operacion', $data);
        }
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
