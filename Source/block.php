<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"WE");
if(!$response)
	header( 'Location: onewordanswer.html' ) ;
else
	header( 'Location: blocknumber.html');
?>
