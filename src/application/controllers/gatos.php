<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gatos extends CI_Controller {

    public function index() {
        $this->load->database();
        $this->load->model('Gato');
        $data['gatos'] = $this->Gato->findAll();
        $this->load->view('gatos', $data);
    }

    public function ver($id) {
        $id = $this->db->escape($id);
        $this->load->database();
        $this->load->model('Gato');
        $data['gato'] = $this->Gato->find($id);
        $this->load->view('gato_info', $data);
    }

    // TODO Refactor porque nombres de formulario = nombres atributos
    public function agregar() {
        if ($this->input->post('envio_formulario')) {
            $this->load->database();
            $this->load->model('Gato');
            $this->Gato->nombre = $this->db->escape($this->input->post('nombre'));
            $this->Gato->alias = $this->db->escape($this->input->post('alias'));
            $this->Gato->edad = $this->db->escape($this->input->post('edad'));
            $this->Gato->color = $this->db->escape($this->input->post('color'));
            $this->Gato->raza = $this->db->escape($this->input->post('raza'));
            $this->Gato->descripcion = $this->db->escape($this->input->post('descripcion'));
            $this->Gato->sexo = $this->db->escape($this->input->post('sexo'));
            $this->Gato->historiaMedica = $this->db->escape($this->input->post('historia_medica'));
            $this->Gato->insert();
            $data['mensaje'] = 'Gato agregado: ' . print_r($this->Gato);
            $this->load->view('resultado_operacion', $data);
        } else {
            $this->load->view('gato_agregar');
        }
    }

    public function eliminar($id) {
        $id = $this->db->escape($id);
        $this->load->database();
        $this->load->model('Gato');
        $this->Gato->delete($id);
        $data['mensaje'] = 'No meowr';
        $this->load->view('mensaje_operacion', $data);
    }

}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
