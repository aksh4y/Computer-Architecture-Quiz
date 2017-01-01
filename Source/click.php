<?php

$answer=$_POST['ans'];
$response=strcasecmp($answer,"volatile");
if(!$response)
	header( 'Location: becauseithascash.html' ) ;
else
	header( 'Location: click.html');
?>