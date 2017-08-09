<html>
<head>
<title>View Mess Fees</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="text"] {
	padding:10px;
	width:150%;
	background-color:#;
}
input[type="submit"] {
	padding:5px;
	width:10%;
	font-size:25px;
	}
</style>
</head>

<?php
$connection = mysql_connect("localhost","root","root") or die ("could not connect to the server" );
mysql_select_db("user",$connection) or die ("Could not connect to the database");
echo"
<body style='font-family:verdana,sans-serif;'>
<div style='width : 80%; padding : 5px 15px 5px; border:1px'>
<center><h1>View Mess Fees</h1>
<br />
<form action='' method='post'>
<fieldset>
<br/><br/>
     <table>
	 <tr>
	 <td><b>Room No.: </b></td>
	 <td><input type ='text' name='roomno'/></td>
	 </tr>
	 <tr>
	 <td><b>Seat No.: </b></td>
	 <td><input type ='text' name='seatno'/></td>
	 </tr>
	 <tr>
	 <td><br/></td>
	 </tr>
	 <tr>
	 <td><b>Name : </b></td>
	 <td><input type ='text' name='name'/></td>
	 </tr>
	 </table>
	 </fieldset>
	 <br/><br/>
	 <center><input type='submit' value='View' name='View'/></center>
</form>
<br/>
</div>
</center>";

if(isset($_POST['View']))
{
$roomno=$_POST['roomno'];
$seatno=$_POST['seatno'];
 $name=$_POST['name'];
 $view=$_SERVER['HTTP_REFERER'];
 
 if((!$roomno) or (!$name))
  {
   header("Location:$view");
   exit();
  }
  
  
 $retvalt=mysql_query("select * from mess2 where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\" and NAME=\"$name\" ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retvalt);
 
 
 if($row!=0)
 {
 	while($sql=mysql_fetch_array($retvalt, MYSQL_ASSOC)) 
	{
		 $roomno = $sql['ROOMNO'];
		 $seatno = $sql['SEATNO'];
		 $name = $sql['NAME'];
		 $fees = $sql['FEES'];
		 $day = $sql['DAYS'];
		 $extra = $sql['EXTRA_CHARGE'];
		 $status = $sql['STATUS'];
		 	 
	}
	echo "
	
	
	<fieldset>
	<legend>
	<center>
	<h2>Details</h2></center>
	</legend>
	<center>
	<table width='70%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>ROOM NO - SEAT NO : </td>
	 <td>$roomno - $seatno</td>
	 </tr>
	 
	 <tr>
	 <td>NAME : </td>
	 <td>$name</td>
	 </tr>
	 
	 <tr>
	 <td>STUDENT'S FEES : </td>
	 <td>$fees</td>
	 </tr>
	 
	 <tr>
	 <td>DAYS : </td>
	 <td>$day</td>
	 </tr>
	 
	 <tr>
	 <td>EXTRA_CHARGE : </td>
	 <td>$extra</td>
	 </tr>
	 
	 <tr>
	 <td>STATUS : </td>
	 <td>$status</td>
	 </tr>
	 
	 
	 </table>
	 </fieldset>
	 <br/>
	 </center>
	 <b>
	 </body>
		
	";
 
 }
 else
 {
	 echo('<p><p><center><h1>MESS FEES NOT CALCULATED</h1></center></p></p>
	 <p><center><a href="mform2.php">CALCULATE NOW</a></center>');
 }


}





	 ?>
