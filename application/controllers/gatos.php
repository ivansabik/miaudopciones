<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gatos extends CI_Controller {

    public function index() {
        $this->load->model('Gato');
        $data['gatos'] = $this->Gato->findAll();
        $data['nosotros'] = $this->InfoNosotros->find();
        $this->load->view('gatos', $data);
    }

    public function ver($id) {
        $id = $this->db->escape($id);
        $this->load->database();
        $this->load->model('Gato');
        $data['gato'] = $this->Gato->find($id);
        $data['nosotros'] = $this->InfoNosotros->find();
        $this->load->view('gato_info', $data);
    }

    // TODO Refactor porque nombres de formulario = nombres atributos
    public function agregar() {
        if ($this->input->post('envioFormulario')) {
            $this->load->database();
            $this->load->model('Gato');
            $this->Gato->nombre = $this->input->post('nombre');
            $this->Gato->alias = $this->input->post('alias');
            $this->Gato->edad = $this->input->post('edad');
            $this->Gato->color = $this->input->post('color');
            $this->Gato->raza = $this->input->post('raza');
            $this->Gato->descripcion = $this->input->post('descripcion');
            $this->Gato->sexo = $this->input->post('sexo');
            $this->Gato->historiaMedica = $this->input->post('historiaMedica');
            $this->Gato->urlFoto = $this->input->post('urlFoto');
            $this->Gato->insert();
            $data['mensaje'] = 'Gato agregado';
            $data['nosotros'] = $this->InfoNosotros->find();
            $this->load->view('resultado_operacion', $data);
        } else {
            $data['nosotros'] = $this->InfoNosotros->find();
            $this->load->view('gato_agregar', $data);
        }
    }

    public function eliminar($id) {
        $this->load->database();
        $this->load->model('Gato');
        $this->Gato->delete($id);
        $data['mensaje'] = 'No meowr';
        $data['nosotros'] = $this->InfoNosotros->find();
        $this->load->view('mensaje_operacion', $data);
    }

}

/* End of file gatos.php */
/* Location: ./application/controllers/gatos.php */
