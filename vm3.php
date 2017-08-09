<html>
<head>
<title>Profile of Student</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
</style>
<head>

 <?php

define('dbhost','localhost');
define('dbname','user');
define('dbuser','root');
define('dbpass','root');


$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());
 
 
 
 
 $retval2=mysql_query("select * from stu_math3") or die("could not retrieve");
 $row2=mysql_numrows($retval2);
echo"<b><strong><center><h2>STUDENTS OF MATH  </h2></center></strong></b><br/>";  
  if($row2!=0)
 {
	 echo"<center>
	  <table border='2' cellspacing='10' cellpadding= '10'>
	  <tr>
	  <td>UET ROLL NO </td>
	  <td>NAME </td>
	  <td>UET INDEX</td>
	  <td>PERCENTAGE</td>
	  <td>CATEGORY</td>
	  </tr>
	  
	  ---------------------------------------------------------------------------------------------------------------------------------------------
	
	  ";
	 //view allotment
 	while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC)) 
	{
      $uet_roll_no=$sql2['UET_ROLL_NO'];
	  $name=$sql2['NAME'];
	  $uet_index=$sql2['UET_INDEX'];
	  $percentage=$sql2['PERCENTAGE'];
	  $category=$sql2['CATEGORY'];
	  
	  
	  echo"
	  <tr>
	  <td>$uet_roll_no</td>
	  <td>$name </td>
	  <td>$uet_index</td>
	  <td>$percentage</td>
	  <td>$category</td>
	  </tr>
	  
	  
	  
	  "; 
	  
 
	  }
	
  echo "</center></table>";
 }
 ?> 