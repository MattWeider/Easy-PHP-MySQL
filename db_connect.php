<?php
class Connection {
	
	//Add as many databases as you would like.  See ReadMe for naming conventions.
	public $db1 = array(
		"host" => "HOSTNAME",
		"user" => "USERNAME",
		"pw" => "PASSWORD",
		"db_name" => "DATABASE_NAME"
	);	
	//If you are only using one database, you may delete the following six lines
	public $db2 = array(
		"host" => "HOSTNAME",
		"user" => "USERNAME",
		"pw" => "PASSWORD",
		"db_name" => "DATABASE_NAME"
	);
	
	//You don't have to change anything here :)
    public function query($db,$query) {
		$i = $this->$db;
		$hidubd = mysql_connect($i['host'], $i['user'], $i['pw']) or die(mysql_error());
		$connect = mysql_select_db($i['db_name'], $hidubd) or die(mysql_error());
		$result = mysql_query($query, $hidubd) or die(mysql_error());
		
		return $result;
    }
}
?>