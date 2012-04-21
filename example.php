<?php

include 'db_connect.php';  //include the db_connect.php file

//Create a new connection
$get = new Connection();

//Format - 'use variable you created connection with' = 'use variable you created connection with'->query("database defined in db_connect.php", "SQL Statement");
$get = $get->query("db1","SELECT * FROM `users`");

//Do whatever you like with the query
echo mysql_num_rows($get);

$test = new Connection();
$test = $test->query("db2","SELECT * FROM `users`");
echo mysql_num_rows($test);

?>