<?php
session_start();
require_once 'db_connect.php';

$db=new DB_CONNECT();
$teamno=$_POST['TeamNo'];
$members=$_POST['Members'];
$result=mysql_query("Insert Into ca_login(TeamNo,Members) Values('$teamno','$members')");
if(!$result)
echo "Contact Aki!";
else
{
$_SESSION['teamno']=$teamno;
$_SESSION['members']=$members;
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome!</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- begin #container -->
<div id="container">
	<!-- begin #header -->
    <div id="header">
    	<div class="mainLogo">
            <div class="logo">Group 7 CIA</div>
            
        </div>
        <div class="icons">&nbsp;</div>
        <div id="navcontainer">
            <ul id="navlist">
                <li><a href="index.html">HOME</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="rules.html">RULES</a></li>
                <li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li id="active"><a href="#">REGISTER</a></li>
				<li class="menuSeparator"><img src="images/menuSeparator.png" alt="" /></li>
                <li><a href="fame.html">HALL OF FAME</a></li>
				
            </ul>
        </div>
    </div>
   <div class="regSuccess">
  </div>
    <!-- end #header -->
    <div class="mainContent">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <h1>SUCCESS!</h1>
      <h1>&nbsp;</h1>
      <h1> <a href="youranswerhere.html">CLICK HERE TO START!</a><br />
        <br />
      </h1>
      <form action="reg.php" method="post">
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
		<p>&nbsp;</p>
      </form>
  </div>
    <div id="footer">
        <p style="color: #85d4ed"><abbr title="eXtensible HyperText Markup Language">Akshay Sadarangani and Rahul Raja Raman</abbr>        
<!--VisibleLinks-->

</div>
</div>
    <!-- end #footer -->
</div>
<!-- end #container -->
</body>
</html>
