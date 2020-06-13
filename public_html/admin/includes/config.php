<?php 
// DB credentials.
define('DB_HOST','localhost');
define('DB_USER','k5222396_elms12');
define('DB_PASS','akuanakcerdas12YAGA#');
define('DB_NAME','k5222396_elms');
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>