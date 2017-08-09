<head>
<meta charset="utf-8">
<title>WELCOME MESS INCHARGE</title>
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
 
 $retval=mysql_query("select * from login where username=\"$username\"  and password=\"$password\" and access=2 ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retval);
 
 
 if($row!=0)
 {
	/* echo("<b><center><h1><u>WELCOME $username</u></h1></center></b> <br/><p>");
 echo"<center><form method='post' action='mform.php'>
<input type='submit' value='CALCULATON OF MESS FEES' name='submit1'/>
</form>
<form method='post' action='vmfees.php'>
<input type='submit' value='VIEW MESS FEES' name='submit'/>
</form>
</center>";*/
if($username=='messincharge1')
{
echo"<frameset cols=30%,70%>
<frame name='try' src='mtry1.php'>
<frame name='target'>
</frameset>";
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
}

if($username=='messincharge2')
{
echo"<frameset cols=30%,70%>
<frame name='try' src='mtry12.php'>
<frame name='target'>
</frameset>";
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
}
if($username=='messincharge3')
{
echo"<frameset cols=30%,70%>
<frame name='try' src='mtry13.php'>
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
	 echo('<p><p><center><h1>YOU ARE NOT MESS INCHARGE</h1></center></p></p>
	 <p><center><a href="mlogin.php">LOGIN AT YOUR COORECT LOGIN FORM</a></center>');
 }
 ?>
 
 
 
 







<!--<html>
<body>
<form method="post" action="mform.php">
<input type="submit" value="CALCULATON OF MESS FEES" name="submit1"/>
</form>

<form method="post" action="vmfees.php">
<input type="submit" value="VIEW MESS FEES" name="submit"/>
</form>
</body>
</html>*/

-->
