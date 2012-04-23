<?php

include 'db_connect.php';  //include the db_connect.php file

//Create and set a new connection
$get = new Connection("db1"); //"db1" is user defined in db_connect.php

//Create a query: $var->query("SQL_STATEMENT"); $var is the variable you created a connection with.
$selectusers = $get->query("SELECT * FROM users");

//Do whatever you would like with the query
echo mysql_num_rows($selectusers);

//Use built in functions to make one line queries.
echo  $get->fetch($selectusers);  //fetch() fetches the associated rows.  More quick functions coming soon.


?>