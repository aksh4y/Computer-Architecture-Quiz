<?php
require_once 'db_connect.php';
$db=new DB_CONNECT();
$teamno=$_SESSION['teamno'];
$members=$_SESSION['members'];

function levelUp()
{
$result=mysql_query("UPDATE ca_login SET Level='$level' WHERE TeamNo='$teamno'");
}
if(!$result)
echo "Contact Aki!";
?>