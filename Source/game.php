<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"64");
if(!$response)
	header( 'Location: tag.html' ) ;
else
	header( 'Location: game.html');
?>
