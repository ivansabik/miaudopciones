<?php

class Migration_inicial_modelos extends CI_Migration {

    public function up() {
        /*
          Column	Type	Null	Default	Comments	MIME
          id	int(11)	No
          fecha	int(11)	No
          id_gato	int(11)	No
          id_adoptante	int(11)	No
          id_formulario_adopcion	int(11)	No
         */
        $this->dbforge->add_field('id');
        $fields = array(
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
        $this->dbforge->create_table('adopciones');

        /*
          Column	Type	Null	Default	Comments	MIME
          id	int(11)	No
          nombres	varchar(50)	No
          apellidos	varchar(50)	No
          mail	varchar(50)	No
          fb	bigint(20)	No
          tel_cel	int(10)	No
          tel_fijo	int(10)	No
         */
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
                'type' => 'BIGINT',
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
        $this->dbforge->create_table('adoptantes');

        /*
          Column	Type	Null	Default	Comments	MIME
          id	int(11)	No
          nombre	varchar(20)	No
          aka	varchar(50)	No
          edad	int(11)	No
          color	varchar(10)	No
          raza	varchar(20)	No
          descripcion	longtext	No
          sexo	varchar(1)	No
          historia_medica	longtext	No
         */
        $this->dbforge->add_field('id');
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'aka' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
            ),
            'edad' => array(
                'type' => 'INT',
                'constraint' => '11',
            ),
            'color' => array(
                'type' => 'VARCHAR',
                'constraint' => '10',
            ),
            'raza' => array(
                'type' => 'VARCHAR',
                'constraint' => '20',
            ),
            'descripcion' => array(
                'type' => 'TEXT',
            ),
            'sexo' => array(
                'type' => 'VARCHAR',
                'constraint' => '1',
            ),
            'historia_medica' => array(
                'type' => 'TEXT',
            ),
        );
        $this->dbforge->add_field($fields);
        $this->dbforge->create_table('gatos');

        /*
          Column	Type	Null	Default	Comments	MIME
          nombre	varchar(50)	No
          descripcion	longtext	No
          lat	float	No
          lon	float	No
         */
        $fields = array(
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '50',
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
        $this->dbforge->drop_table('adopciones');
        $this->dbforge->drop_table('adoptantes');
        $this->dbforge->drop_table('gatos');
        $this->dbforge->drop_table('nosotros');
    }

}
