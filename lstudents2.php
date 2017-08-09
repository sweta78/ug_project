  <html>
<head>
<title>WELCOME</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
	padding:120;
}
</style>
 <?php

define('dbhost','localhost');
define('dbname','user');
define('dbuser','root');
define('dbpass','root');


$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());
 
 
 
 
 $retval2=mysql_query("select * from rstatus2 ") or die("could not retrieve");
 $row2=mysql_numrows($retval2);
 
echo"<b><strong><center><h2>DJ HOSTEL </h2></center></strong></b><br/>";
 
 
  if($row2!=0)
 {
	 echo"<center>
	  <table border='0' cellspacing='10' cellpadding= '10'>
	  <tr>
	  <td>ROOM NO-SEAT NO </td>
	  <td>NAME </td>
	  <td>UET ROLL NO</td>
	  </tr>
	  
	  ---------------------------------------------------------------------------------------------------------------------------------------------
	
	  ";
	 //view allotment
 	while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC)) 
	{
      $roomno=$sql2['ROOMNO'];
	  $seatno=$sql2['SEATNO'];
	  $name=$sql2['NAME'];
	  $uet_roll_no=$sql2['UET_ROLL_NO'];
	  
	  if($name)
	  {
	  echo"
	  <tr>
	  <td>$roomno-$seatno</td>
	  <td>$name </td>
	  <td>$uet_roll_no</td>
	  </tr>
	  
	  
	  
	  "; 
	  }
 
	  }
	
  echo "</table></center>";
 }
 ?>