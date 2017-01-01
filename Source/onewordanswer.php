<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"adder");
if(!$response)
	header( 'Location: thenhowdowefall.html' ) ;
else
	header( 'Location: onewordanswer.html');
?>
