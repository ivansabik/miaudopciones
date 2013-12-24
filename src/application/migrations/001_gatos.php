<?php

class Migration_Gatos extends CI_Migration {

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'nombre' => array(
                'type' => 'TEXT',
            ),
            'aka' => array(
                'type' => 'TEXT',
            ),
            'edad' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'color' => array(
                'type' => 'TEXT',
            ),
            'raza' => array(
                'type' => 'TEXT',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'sexo' => array(
                'type' => 'TEXT',
            ),
            'historia_medica' => array(
                'type' => 'TEXT',
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('gatos');
    }

    public function down() {
        $this->dbforge->drop_table('gatos');
    }

}
