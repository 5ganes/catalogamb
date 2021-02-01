<?php 
class DatabaseTable {
	public $pdo;
	public $table;
	function __construct($table) {
		$this->pdo = new PDO('mysql:dbname=catalogamb;host=localhost', 'root', '');
		$this->table = $table;
	}
	function insert($record){
		$keys = array_keys($record);
		$fieldsWithComma = implode(',', $keys);
		$fieldsWithCommaColon = implode(', :', $keys);
		$stmt = $this->pdo->prepare("INSERT INTO $this->table($fieldsWithComma) VALUES(:$fieldsWithCommaColon)");
		$stmt->execute($record);
	}
}