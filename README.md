Easy-PHP-MySQL
==============

Info:
-----

Easy-PHP-MySQL simplifies and shortens the process of multiple connections and queries with one or more MySQL databases in PHP.

Version: 1.01 (4/23/2012)

Contributors:
* Matt Weider -> https://github.com/MattWeider
* Powerc9000 -> https://github.com/powerc9000

Coming Soon:
------------

* Better/more documentation
* Better/more examples
* More shortcode functions
* More ways to connect to your database

Usage:
------

1) Place db_connect.php on your server.
<br /><br />2) Edit db_connect.php configurations by adding your database credentials.  You may add as many or as few databases as you would like.  The naming convention (not required) is "db1", "db2", "db3", etc...
<br /><br />3) Done with configuration!
<br /><br />4) Include db_connect.php in any file you wish to have database communication with. (For help including, view "example.php")
<br /><br />5) Create a connection: `$mydb = new Connection("db1");` (choose a variable that reflects what database you are using, I used "$mydb".  Your database variable (what you used in db_connect.php) goes inside of the new Connection class).
<br /><br />6) Create a statement: `$getusers = $mydb->query("SELECT * FROM users");`
<br /><br />7) Done!  Now you can do as you wish with your query using your variable (mine: $getusers).  Check out example.php to see shortcodes.

Example:
--------

Check out example.php for a working example.