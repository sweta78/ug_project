<head>
<meta charset="utf-8">
<title>WELCOME ADMIN</title>
<link rel="icon" type="image/gif" href="mmv.gif">
</head>


<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 $login=$_SERVER['HTTP_REFERER'];
 
 if((!$username) or (!$password))
  {
   header("Location:$login");
   exit();
  }
  
  $conn=@mysql_connect("localhost","root","root")
        or die("cannot connect");
  $db1=@mysql_select_db("user",$conn) or die("cannot connect");
 
 $retval=mysql_query("select * from login where username=\"$username\"  and password=\"$password\" and access=1 ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retval);
 
 
 if($row!=0)
 {
/* echo("<b><center><h1><u>WELCOME $username</u></h1></center></b> <br/><p>");
 
 echo"<center><form method='post' action='allotment.php'>
<input type='submit' value='ALLOTMENT OF SEATS' name='submit1'/>
</form>
<form method='post' action='update.php'>
<input type='submit' value='UPDATE PROFILE OF STUDENT/STUDENTS' name='submit2'/>
</form>
<form method='post' action='vdetails.php'>
<input type='submit' value='VIEW PROFILE OF STUDENT/STUDENTS' name='submit3'/>
</form>
<form method='post' action='delete.php'>
<input type='submit' value='DELETE STUDENT'S DETAILS' name='submit'/>
</form>
</center>";*/
if($username=='skadmin')
{
echo"<frameset cols=30%,70%>
<frame name='try' src='atry1.php'>
<frame name='target'>
</frameset>";
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
	
}
else if($username=='djadmin')
{//echo"it is working";
	echo"<frameset cols=30%,70%>
<frame name='try' src='atry12.php'>
<frame name='target'>
</frameset>";
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
	
	
}	

else if($username=='jkadmin')
{
	echo"<frameset cols=30%,70%>
<frame name='try' src='atry13.php'>
<frame name='target'>
</frameset>";
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
	
	
}	

	echo"
	 <center>
	 <b>
	<a href='logout.php'>LOGOUT</a></b></center>
	
	";
 
 }
 else
 {
	 echo('<p><p><center><h1>YOU ARE NOT ADMIN</h1></center></p></p>
	 <p><center><a href="alogin.php">LOGIN AT YOUR COORECT LOGIN FORM</a></center>');
 }
 ?>
 
 
 
 