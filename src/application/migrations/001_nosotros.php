<?php

class Migration_Nosotros extends CI_Migration {

    public function up() {
        $fields = array(
            'nombre' => array(
                'type' => 'TEXT',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'lat' => array(
                'type' => 'FLOAT',
            ),
            'lon' => array(
                'type' => 'FLOAT',
            ),
        );

        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('nosotros');
    }

    public function down() {
        $this->dbforge->drop_table('nosotros');
    }

}
