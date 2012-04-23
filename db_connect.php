<?php
class Connection {
	//Add (or remove) as many databases as you would like.  See ReadMe for naming conventions.
	public $db1 = array(
		"host" => "HOSTNAME",
		"user" => "USERNAME",
		"pw" => "PASSWORD",
		"db_name" => "DATABASE_NAME"
	);
	public $db2 = array(
		"host" => "HOSTNAME",
		"user" => "USERNAME",
		"pw" => "PASSWORD",
		"db_name" => "DATABASE_NAME"
	);
	
	//You don't have to change anything here :)
	public function __construct($cdb){
		$this->cdb = $cdb;
	}
	public function query($query) {
		$k = $this->cdb;
		$i = $this->$k;
		
		$j = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $j) or die(mysql_error());
		$result = mysql_query($query, $j) or die(mysql_error());

		$this->result = $result;
		return $result;
	}
	
	public function fetch(){
		$rows = mysql_num_rows($this->result);
		$data = array();
		for($i=0;$i<$rows;$i++){
			$data[$i] = mysql_fetch_assoc($this->result);
		}
		return $data;
	}
}
?>