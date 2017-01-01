<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"Redundant Array of Independent Disks");
if(!$response)
	header( 'Location: p29.html' ) ;
else
	header( 'Location: becauseithascache.html');
?>
