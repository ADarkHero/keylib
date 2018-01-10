# keylib
Custom library manager for Steam games and other things in the future.
To use it, put it on your **PHP-server**, load the **mysql dump** into your database and change the variables in the **php/scr/database.php**.

Currently the rows in the database need to be ordered like this but the row names are irrelevant:
* ID
* Name
* Description
* Image
* Additional Infotable 1
* Additional Infotable 2
* ...
