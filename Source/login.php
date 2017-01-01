<?php
session_start();
require_once 'db_connect.php';

$db=new DB_CONNECT();
$teamno=$_POST['TeamNo'];
$result=mysql_query("Select Members from ca_login where TeamNo=$teamno");
if(!empty($result))
{
if (mysql_num_rows($result) > 0) {
 
            $result = mysql_fetch_array($result);
			$members=$result["Members"];

$_SESSION['teamno']=$teamno;
$_SESSION['members']=$members;
header( 'Location: whatnumber.html' ) ;
}
else
echo "Error!";
}

?>