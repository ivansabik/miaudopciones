<?php

class Migration_Adopciones extends CI_Migration {

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'fecha' => array(
                'type' => 'DATE',
                'null' => false,
            ),
            'gato_id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'adoptante_id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'formulario_adopcion_id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('adopciones');
    }

    public function down() {
        $this->dbforge->drop_table('adopciones');
    }

}
