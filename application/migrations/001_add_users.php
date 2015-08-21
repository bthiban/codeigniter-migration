<?php
defined ( "BASEPATH" ) or exit ( "No direct script access allowed" );
/**
 * This is the easyiest way write a sql migration (lazy method)
 * Efficient way for a shortest deadline project.
 * Create your table at phpMyadmin and get the query and paste it in $this->db->query();
 * 
 * @author Birathiban
 *        
 */
class Migration_add_users extends CI_Migration {
	public function up() {
		$this->db->query ( "CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `status` enum('active','in-active','banned') DEFAULT 'in-active',
  `created` datetime DEFAULT NULL,
  `updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `premium` enum('Yes','No') NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;" );
	}
	public function down() {
		$this->dbforge->drop_table ( 'users' );
	}
}

