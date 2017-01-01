<?php
$answer=$_POST['ans'];
$response=strcasecmp($answer,"l1");
if(!$response)
	header( 'Location: us.html' ) ;
else
	header( 'Location: computerarchitecture.html');
?>
