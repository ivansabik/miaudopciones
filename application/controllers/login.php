<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
        // Auth si existe usuario loggeado
        $this->load->view('login');
    }

    public function auth() {
        $usuario = $this->db->escape($this->input->post('usuario'));
        $pass = $this->input->post('pass'); // No es necesario sanitize porque no entra al query SQL
        if ($this->_validate($usuario, $pass)) {
            // Guardar en sesion
            $this->load->model('InfoNosotros');
            $data['infoNosotros'] = $this->InfoNosotros->find();
            $this->load->view('nosotros_editar', $data);
        } else {
            $data['mensaje'] = 'Usuario o contrasenia invalidos';
            $this->load->view('resultado_operacion', $data);
        }
    }

    public function editar($usuario, $pass, $nuevoPass) {
        // Validar usuario y pass actuales, actualizar info con nuevo pass
        $this->_hashimize($nuevoPass);
    }

    private function _hashimize($pass) {
        $this->load->library('PasswordHash');
        $hash = $this->passwordhash->HashPassword($pass);
        if (strlen($hash) < 20) {
            // Scheiss, no se pudo generar hash
            return false;
        }
        return $hash;
    }

    private function _validate($usuario, $pass) {
        $this->load->library('PasswordHash');
        $query = $this->db->query('SELECT usuario, hashim FROM infoNosotros WHERE usuario = ' . $usuario);
        if ($query->num_rows() == 1) {
            $row = $query->row();
            if ($this->passwordhash->CheckPassword($pass, $row->hashim)) {
                return true;
            }
        }
        return false;
    }

}

/* End of file login.php */
/* Location: ./application/controllers/login.php */
