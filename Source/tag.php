<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"cam");
if(!$response)
	header( 'Location: finishline.html' ) ;
else
	header( 'Location: tag.html');
?>
