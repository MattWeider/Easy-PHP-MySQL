Easy-PHP-MySQL
==============

Easy-PHP-MySQL simplifies and shortens the process of connecting and querying one or more databases in PHP.

Usage:

1) Place db_connect.php on your server.
<br />2) Edit db_connect.php configurations by adding your database credentials.  You may add as many or as few databases as you would like.  The naming convention (not required) is "db1", "db2", "db3", etc...
<br />3) Done with configuration!
<br />4) Include db_connect.php in any file you wish to have database communication with. (For help including, view "example.php"
<br />5) Create a connection: '$users = new Connection();' (choose a variable that reflects what you are doing, I used "$users").
<br />6) Choose your database and create a statement: '$users = $users->query("db1","SELECT * FROM `users`");' (IMPORTANT: Use the same name for both variables)
<br />7) Done!  Now you can do as you wish with your query using your variable (mine: $users)

Example:

`Create a new connection`
`$users = new Connection();`

`Create a query (View documentation for an example.`
`$users = $users->query("db1","SELECT * FROM users");`

`Do what ever you want with the query's result.`
`echo mysql_num_rows($users); (You can do anything with $users!)`



For more [complete] examples check out example.php


More/Better Documentation and Examples coming soon.