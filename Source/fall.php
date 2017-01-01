<?php
$answer=$_POST['Answer'];
$response=strcasecmp($answer,"111");
if(!$response)
 header( 'Location: moo.html' ) ;
else
header( 'Location: thenhowdowefall.html');
?>
