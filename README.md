# injectionSql example

PHP project with a connection at database and some treatments. The project it's essentially for studying 


# Connexion to the Database

If you want to use the project. 
Import this sql file into your BD `./database/database.sql`.
Change the information of connexion into the `./conectDB.php`

Example if your username of your BD is `toto` and the password `titi` :

```php
$dsn = 'mysql:dbname=php_database;host=127.0.0.1';
$user = 'toto';
$password = 'titi';
```