<?php

include 'db_connect.php';

$get1 = new Connection();
$get1 = $get1->query("db1","SELECT * FROM `users`");
echo mysql_num_rows($get1);

$test = new Connection();
$test = $test->query("db2","SELECT * FROM `users`");
echo mysql_num_rows($test);

?>