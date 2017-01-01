<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"Reduced Instruction Set Computing");
if(!$response)
	header( 'Location: theonethatisnoteven.html' ) ;
else
	header( 'Location: mmu.html');
?>
