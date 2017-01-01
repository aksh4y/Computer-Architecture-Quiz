<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"RAM");
if(!$response)
	header( 'Location: click.html' ) ;
else
	header( 'Location: computerarchitecture.html');
?>
