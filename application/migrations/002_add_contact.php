<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * This is the framework oriented way.
 *
 * @author Birathiban
 *        
 */
class Migration_add_contact extends CI_Migration {
	public function up() {
		$this->dbforge->add_field ( array (
				'id' => array (
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => FALSE,
						'auto_increment' => TRUE 
				),
				'user_id' => array (
						'type' => 'INT',
						'constraint' => 11,
						'unsigned' => FALSE,
						'null' => FALSE 
				),
				'phone' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'mobile' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'verified_mobile' => array (
						'type' => "enum('Yes','No')",
						'null' => FALSE,
						'default' => 'No' 
				),
				'address_line_1' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'address_line_2' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'city' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE 
				),
				'zipcode' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE
				),
				'state' => array (
						'type' => 'varchar',
						'constraint' => 100,
						'null' => TRUE
				),
				'geo_lat' => array (
						'type' => 'decimal(10,5)',
						'null' => FALSE
				),
				'geo_lng' => array (
						'type' => 'decimal(10,5)',
						'null' => FALSE
				)
		) );
		
		$this->dbforge->add_key ( 'id', TRUE );
		$this->dbforge->create_table ( 'contact' );
		$this->db->query ( "ALTER TABLE contact ENGINE = InnoDB" );
		
		/* ALTERING THE CREATED TABLE AND ADDING FOREIGN KEYS */
		$this->db->query ( "ALTER TABLE contact ADD FOREIGN KEY contact(user_id) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE" );
	}
	public function down() {
		$this->dbforge->drop_table ( 'contact' );
	}
}
