<?php
require_once 'db_connect.php';

$db=new DB_CONNECT();
$teamno=$_GET['hits'];
$members="Bond";
$result=mysql_query("Insert Into ca_login(TeamNo,Members) Values('$teamno','$members')");
if(!$result)
echo "Contact Aki!";

?>
