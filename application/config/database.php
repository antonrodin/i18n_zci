<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A en table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By en there is only one group (the 'en' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'en';
$active_record = TRUE;

$db['en']['hostname'] = 'localhost';
$db['en']['username'] = 'root';
$db['en']['password'] = '';
$db['en']['database'] = 'zci_en';
$db['en']['dbdriver'] = 'mysql';
$db['en']['dbprefix'] = '';
$db['en']['pconnect'] = TRUE;
$db['en']['db_debug'] = TRUE;
$db['en']['cache_on'] = FALSE;
$db['en']['cachedir'] = '';
$db['en']['char_set'] = 'utf8';
$db['en']['dbcollat'] = 'utf8_general_ci';
$db['en']['swap_pre'] = '';
$db['en']['autoinit'] = TRUE;
$db['en']['stricton'] = FALSE;

$db['es']['hostname'] = 'localhost';
$db['es']['username'] = 'root';
$db['es']['password'] = '';
$db['es']['database'] = 'zci_es';
$db['es']['dbdriver'] = 'mysql';
$db['es']['dbprefix'] = '';
$db['es']['pconnect'] = TRUE;
$db['es']['db_debug'] = TRUE;
$db['es']['cache_on'] = FALSE;
$db['es']['cachedir'] = '';
$db['es']['char_set'] = 'utf8';
$db['es']['dbcollat'] = 'utf8_general_ci';
$db['es']['swap_pre'] = '';
$db['es']['autoinit'] = TRUE;
$db['es']['stricton'] = FALSE;

$db['ru']['hostname'] = 'localhost';
$db['ru']['username'] = 'root';
$db['ru']['password'] = '';
$db['ru']['database'] = 'zci_ru';
$db['ru']['dbdriver'] = 'mysql';
$db['ru']['dbprefix'] = '';
$db['ru']['pconnect'] = TRUE;
$db['ru']['db_debug'] = TRUE;
$db['ru']['cache_on'] = FALSE;
$db['ru']['cachedir'] = '';
$db['ru']['char_set'] = 'utf8';
$db['ru']['dbcollat'] = 'utf8_general_ci';
$db['ru']['swap_pre'] = '';
$db['ru']['autoinit'] = TRUE;
$db['ru']['stricton'] = FALSE;



/* End of file database.php */
/* Location: ./application/config/database.php */