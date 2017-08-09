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
	 

		
 
 $roomno = $_POST['roomno'];
 $seatno = $_POST['seatno'];
 $name= $_POST['name'];
 
 
 if(1 === preg_match('/\D/',$roomno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN ROOM NO.";
 }
  
 
  if(1 === preg_match('/\d/',$name) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN STUDENT's NAME.";
 }
 
 
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<b><center><h2> UPDATE NOW </a>WITH PROPER VALUES :-)</h2></center></b>";
}
 else
 {
	
 $sql1="update rstatus3 set DEFAULTER='YES' where ROOMNO='$roomno' and SEATNO='$seatno' and NAME='$name'";
 $retval = mysql_query($sql1) or die(mysql_error());
 
if($retval)
 {
	echo "<center><strong>PROFILE of $name of ROOM NO $roomno UPDATED AS DEFAULTER<br/> ";
	
	 }
}	



 

 


?>