# keylib
![Keylib Screenshot](https://i.imgur.com/ZnMTV1Y.png)
Custom library manager for Steam games and other things in the future.

For more Screenshots, take a look at [the wiki](https://github.com/ADarkHero/keylib/wiki/Screenshots).

## Small tutorial, to get this project running on your server:
* Download the [latest release](https://github.com/ADarkHero/keylib/releases)
* Put in on your **PHP-server**
* Load the **mysql dump**, or create your own database (see below)
* Change the variables in the **php/scr/database.php**.

## Currently the rows in the database need to be ordered like this but the row names are irrelevant:
* ID
* Image
* Name
* Description
* Additional info-row 1
* Additional info-row 2
* ...
