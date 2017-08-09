<html>
<head>
<title>Profile of Student</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="text"] {
	padding:3px;
	width:100%;
	background-color:#;
}
input[type="submit"] {
	padding:5px;
	width:30%;
	font-size:15px;
	}
span {
	color:red;
}
</style>
</head>

<?php
$connection = mysql_connect("localhost","root","root") or die ("could not connect to the server" );
mysql_select_db("user",$connection) or die ("Could not connect to the database");
echo"
<body style='font-family:verdana,sans-serif;'>
<div style='width : 80%; padding : 5px 15px 5px; border:1px'>
<center><h1>Search</h1>
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
	 <br/>
	 <br/>
	<center><input type='submit' value='update' name='update'/></center>
</form>
<br/>
</div>
</center>";

if(isset($_POST['update']))
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
  
  
 $retvalt=mysql_query("select * from mess3 where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\" and NAME=\"$name\" ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retvalt);
 
 
 if($row!=0)
 {
 	while($sql=mysql_fetch_array($retvalt, MYSQL_ASSOC)) 
	{
		 $status=$sql['STATUS'];
		 if($status=='UNPAID')
		 echo"MESS FEES NOT PAID.FIRST CLEAR THAT DUE.";
		 else
		 {
		 $retvalu=mysql_query("update rstatus3 set NDUES='CLEARED' where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\" and NAME=\"$name\" ");
		 echo "MESS FEE STATUS : $status";
		 echo"ALL DUES CLEARED";
		 
		 }
		 	 
	}
	
 }
 else
 {
	 echo("<p><p><center><h1>NO SUCH STUDENT EXIST</h1></center></p></p>");
 }


}





	 ?>
