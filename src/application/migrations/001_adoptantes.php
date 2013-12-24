<?php

class Migration_Adoptantes extends CI_Migration {

    public function up() {
        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'nombres' => array(
                'type' => 'TEXT',
            ),
            'apellidos' => array(
                'type' => 'TEXT',
            ),
            'mail' => array(
                'type' => 'TEXT',
            ),
            'fb' => array(
                'type' => 'INT',
                'constraint' => '50',
            ),
            'tel_cel' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
            'tel_fijo' => array(
                'type' => 'INT',
                'constraint' => '10',
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('adoptantes');
    }

    public function down() {
        $this->dbforge->drop_table('adoptantes');
    }

}
