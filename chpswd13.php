<html>
<head>
<title>Delete Profile</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
</style>
</head>


<?php

define('dbhost','localhost');
define('dbname','user');
define('dbuser','root');
define('dbpass','root');

$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());

function out_error($error)
{
 echo "<br>";
 return '<ol><li>'.implode('</li><br><li>',$error).'</li></ol>';
}
	 

		
 
 $opswd = $_POST['opswd'];
 $npswd = $_POST['npswd'];
 $cnpswd = $_POST['cnpswd'];
 
 
 
if(strlen($_POST['npswd'])<6)
 {
  $error[]="PASSWORD MUST BE AT LEAST 6 CHARACTERS LONG.";
 }
 
  if($_POST['npswd']!=$_POST['cnpswd'])
 {
	 $error[]="PASSWORDS DO NOT MATCH";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='r1.html'><b><center><h2> REGISTER NOW </a>WITH PROPER VALUES :-)</h2></center></b>";
}
 else
 {
	
 $sql1="update pd3 set PASSWORD='$npswd' where PASSWORD='$opswd' ";
 $retval = mysql_query($sql1) or die(mysql_error());
 $sql2="update pdh3 set PASSWORD='$npswd' where PASSWORD='$opswd' ";
 $retval = mysql_query($sql2) or die(mysql_error());
 
 
if($retval)
 {
	echo "<center><strong>YOUR PASSWORD HAS BEEN CHANGED <br/> ";
	echo "LOGOUT AND THEN AGAIN LOGIN WITH NEW PASSWORD <strong></center>";
	
	echo"
	 <center>
	 <b>
	<a href='logout.php'>LOGOUT</a></b></center>
	
	";
 }
}	



 

 


?>