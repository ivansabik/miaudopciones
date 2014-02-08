<?php

class Migration_inicial_modelos extends CI_Migration {

    public function up() {
        // Adopciones
        $this->dbforge->add_field('id');
        $fields = array(
            'fecha' => array(
                'type' => 'DATE',
                'null' => false,
            ),
            'gato' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'adoptante' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
            'formularioAdopcion' => array(
                'type' => 'INT',
                'constraint' => '50',
                'null' => false,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('adopciones');

        // Adoptantes
        $this->dbforge->add_field('id');
        $fields = array(
            'nombres' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'apellidos' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'mail' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'fb' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'telCel' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'telFijo' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'urlFoto' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            )
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('adoptantes');

        // Gatos
        $this->dbforge->add_field('id');
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'alias' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'edad' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'color' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'raza' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'sexo' => array(
                'type' => 'INT',
                'constraint' => '1',
            ),
            'historiaMedica' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'urlFoto' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),
            'fecha' => array(
                'type' => 'DATE',
                'null' => false,
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('gatos');
		
		
		
		// comboEstilos
        $this->dbforge->add_field('id');
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'nombreArchivo' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('comboEstilo');
		

        // Info Nosotros
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'lat' => array(
                'type' => 'FLOAT',
            ),
            'lon' => array(
                'type' => 'FLOAT',
            ),
            'usuario' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'hashim' => array(
                'type' => 'TEXT',
            ),
            'mail' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'fb' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'telCel' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'telFijo' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'comboEstilo' => array(
                'type' => 'INT',
                'constraint' => '10',
                'default' => '1',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('nombre', TRUE);
        $this->dbforge->create_table('infoNosotros');

        // Fotos gatos
        $this->dbforge->add_field('id');
        $fields = array(
            'gato' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
                'null' => true,
            ),
            'url' => array(
                'type' => 'VARCHAR',
                'constraint' => '200',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('fotosGatos');

        // Formularios adopcion
    }

    public function down() {
        $this->dbforge->drop_table('adopciones');
        $this->dbforge->drop_table('adoptantes');
        $this->dbforge->drop_table('gatos');
        $this->dbforge->drop_table('infoNosotros');
        $this->dbforge->drop_table('fotosGatos');
    }

}
