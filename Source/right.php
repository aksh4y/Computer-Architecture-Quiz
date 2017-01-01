<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"DMA");
if(!$response)
	header( 'Location: gotolevel16.html' ) ;
else
	header( 'Location: ca/right.html');
?>
