<?php
class Database{
	private $db;

	public function __construct() {
		$this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
	}

	public function execute_query($query){
		$result = $this->db->query($query);
		return $result;
	}
}

?>