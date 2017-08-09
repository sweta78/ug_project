<head>
<title>Student Login</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
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
$roomno=$_POST['roomno'];
$seatno=$_POST['seatno'];
$name=$_POST['sname'];
$days=$_POST['days'];
$extra_charge=$_POST['extra_charge'];
$description=$_POST['description'];

function out_error($error)
{
 echo "<br>";
 return '<ol><li>'.implode('</li><br><li>',$error).'</li></ol>';
}

if(1 === preg_match('/\D/',$roomno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN ROOM NO.";
 }
 if(1 === preg_match('/\d/',$seatno) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN SEAT NO.";
 }
 if(1 === preg_match('/\D/',$days) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN DAYS.";
 }
 if(1 === preg_match('/\D/',$extra_charge) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN EXTRA CHARGE.";
 }
  if(1 === preg_match('/\d/',$name) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN STUDENT's NAME.";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='mform3.php'><b><center><h2> FILL THE DETAILS AGAIN </a>WITH PROPER VALUES :-)</h2></center></b>";
}
else
{ 
  $retval2 = mysql_query("select * from rstatus3 where ROOMNO='$roomno' and SEATNO='$seatno' and NAME= '$name'");
 $row2=mysql_numrows($retval2);
 
 if($row2!=0)
 {
 $sql1="INSERT INTO mess3(ROOMNO,SEATNO,NAME,DAYS,EXTRA_CHARGE,DESCRIPTION) VALUES('$roomno','$seatno','$name','$days','$extra_charge','$description')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 $put1=mysql_query("update mess3 set FEES=((DAYS*70)+EXTRA_CHARGE)");
 
 $retval1=mysql_query("select * from mess3 where roomno=\"$roomno\" and seatno=\"$seatno\" and name=\"$name\" ") or die("could not retrieve");
 
 
 $row=mysql_numrows($retval1);
 
 
 if($row!=0)
 {
 echo("<b><center><h1><u>MESS FEES CALCULATION</u></h1></center></b> <br/><p>");

	while($sql=mysql_fetch_array($retval1, MYSQL_ASSOC)) 
	{
		 $roomno = $sql['ROOMNO'];
		 $seatno = $sql['SEATNO'];
		 $name = $sql['NAME'];
		 $fees = $sql['FEES'];
		 $description = $sql['DESCRIPTION'];
	}
	echo "<body>
	
	
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>ROOM NO-SEATNO : </td>
	 <td>$roomno-$seatno</td>
	 </tr>
	 
	 <tr>
	 <td>STUDENT'S NAME : </td>
	 <td>$name</td>
	 </tr>
	 
	 <tr>
	 <td>FEES CALCULATED : </td>
	 <td>$fees</td>
	 </tr>
	 
	 <tr>
	 <td>DESCRIPTION : </td>
	 <td>$description</td>
	 </tr>
	 
	  
	 </table>
	 
	 <br/>
	 <center>
	 <b>
	<a href='mform3.php'>CALCULATION OF MESS FEES FOR ANOTHER STUDENT</a></b></center>
	
	";
 
 }
 }
 else
	 echo "NO SUCH STUDENT EXIST";
}
 
 ?>