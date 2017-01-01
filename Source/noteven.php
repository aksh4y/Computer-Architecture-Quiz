<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"SP");
if(!$response)
	header( 'Location: leftorright.html' ) ;
else
	header( 'Location: theonethatisnoteven.html');
?>
