<?php

class Connection {
	
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
	
    public function query($db,$query) {
		$i = $this->$db;
		$hidubd = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $hidubd) or die(mysql_error());
		$result = mysql_query($query, $hidubd);
		
		return $result;
    }
}

?>