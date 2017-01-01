<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"64");
if(!$response)
	header( 'Location: game.html' ) ;
else
	header( 'Location: mellon.html');
?>
