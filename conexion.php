<?php
$db_host="localhost"; //localhost server
$db_user="brandon"; //database username
$db_password="12345"; //database password
$db_name="paginaraul";  //database name

try
{
	$db=new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}
?>