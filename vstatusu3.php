<html>
<head>
<title>Update Status</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>body {
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
 
 
 
 
 $retval2=mysql_query("select * from mess3 ") or die("could not retrieve");
 $row2=mysql_numrows($retval2);
echo"<b><strong><center><h2> LIST OF ALL THE STUDENTS WHO HAVE NOT PAID THE FEES </h2></center></strong></b><br/>";  
  if($row2!=0)
 {
	 echo"<center>
	  <table border='2' cellspacing='10' cellpadding= '10'>
	  <tr>
	  <td>ROOM NO-SEAT NO </td>
	  <td>NAME </td>
	  <td>STUDENT'S FEES </td>
	  <td>DAYS </td>
	  <td>EXTRA CHARGE </td>
	  <td>STATUS </td>
	  </tr>
	  
	  ---------------------------------------------------------------------------------------------------------------------------------------------
	
	  ";
	 //view allotment
 	while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC)) 
	{
      $roomno=$sql2['ROOMNO'];
	  $seatno=$sql2['SEATNO'];
	  $name=$sql2['NAME'];
	  $sfees=$sql2['FEES'];
	  $day=$sql2['DAYS'];
	  $extra=$sql2['EXTRA_CHARGE'];
	  $status=$sql2['STATUS'];
	 if($status=='UNPAID') 
	 {
	  echo"
	  <tr>
	  <td>$roomno-$seatno</td>
	  <td>$name </td>
	  <td>$sfees </td>
	  <td>$day </td>
	 <td>$extra </td>
	  <td>$status </td>
	  </tr>
	  
	  
	  
	  "; 
 
	  }
	
  echo "</table></center>";
  }
 }
 ?>