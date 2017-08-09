<html>
<head>
<title>Student Profile</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<link type="text/css" rel="stylesheet" href="slog.css" />
</head>
<body>
<p align="center"><img src="bhu.png"></p>

</body>
</html>
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
 
 $retval=mysql_query("select * from pd where username=\"$username\"  and password=\"$password\" ") or die("could not retrieve");
 $row=mysql_numrows($retval);
 $y=1;
 if($row==0)
 {
	 $retval=mysql_query("select * from pd2 where username=\"$username\"  and password=\"$password\" ") or die("could not retrieve");
 $row=mysql_numrows($retval);
 $y=2;
 }
 if($row==0)
 {
	 $retval=mysql_query("select * from pd3 where username=\"$username\"  and password=\"$password\" ") or die("could not retrieve");
 $row=mysql_numrows($retval);
 $y=3;
	 
 }
 
 
 if($row!=0)
	 {
		 
		
		 if($y==1)
	echo" 
		 
		 <div id='container'>
<h3>
<div class='div1'>
  <ul>
  <li><a href='mmenu.html' target='_blank' class='noBorder leftEdge'>Mess Menu</a></li>
  <li><a href='mtime.html' target='_blank'>Mess Time Table</a></li>
  <li><a href='mrule.html' target='_blank'>Mess Rules</a></li>
  <li><a href='logout.php' class='rightEdge'>Logout</a></li>
  	 
		 
		 <a href = 'chpswd.php' class='noBorder leftEdge'>CHANGE PASSWORD </a>
		 ";
		 if($y==2)
			 echo"
		 <div id='container'>
<h3>
<div class='div1'>
  <ul>
  <li><a href='mmenu.html' target='_blank' class='noBorder leftEdge'>Mess Menu</a></li>
  <li><a href='mtime.html' target='_blank'>Mess Time Table</a></li>
  <li><a href='mrule.html' target='_blank'>Mess Rules</a></li>
  <li><a href='logout.php' class='rightEdge'>Logout</a></li>
  	 
		 <a href = 'chpswd2.php' class='noBorder leftEdge'>CHANGE PASSWORD </a>
		 ";
		 if($y==3)
			 echo"
		 <div id='container'>
<h3>
<div class='div1'>
  <ul>
  <li><a href='mmenu.html' target='_blank' class='noBorder leftEdge'>Mess Menu</a></li>
  <li><a href='mtime.html' target='_blank'>Mess Time Table</a></li>
  <li><a href='mrule.html' target='_blank'>Mess Rules</a></li>
  <li><a href='logout.php' class='rightEdge'>Logout</a></li>
  	 
		 <a href = 'chpswd3.php' class='noBorder leftEdge'>CHANGE PASSWORD </a>
		 </ul>
 </div>
</h3>
</div>
		 ";
		 

	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{     echo"<br/><br/><br/><br/>";
		 $uet_rno = $sql['UET_ROLL_NO'];
		 $sname = $sql['NAME'];
		 $fname = $sql['F_NAME'];
		 $mname = $sql['M_NAME'];
		 $uetindex = $sql['UET_INDEX'];
		 $dob = $sql['DOB'];
		 $cat = $sql['CATEGORY'];
		 $course = $sql['COURSE'];
		 $year = $sql['YEAR'];
		 $img=$sql['PIC'];
		 session_start();
		 $_session['sess_user']=$username;
	}
	echo "
	
	
	<fieldset>
	<legend>
	<h2>Personal Detail</h2>
	</legend>
	<img src='photo/$img'>
	<hr>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>UET ROLL NO : </td>
	 <td>$uet_rno</td>
	 </tr>
	 
	 <tr>
	 <td>UET Index : </td>
	 <td>$uetindex</td>
	 </tr>
	 
	 <tr>
	 <td>Student Name : </td>
	 <td>$sname</td>
	 </tr>
	 
	 <tr>
	 <td>Father's Name : </td>
	 <td>$fname</td>
	 </tr>
	 
	 <tr>
	 <td>Mother's Name : </td>
	 <td>$mname</td>
	 </tr>
	 
	 <tr>
	 <td>DOB : </td>
	 <td>$dob</td>
	 </tr>
	 
	 <tr>
	 <td>Category : </td>
	 <td>$cat
    </td>
	 </tr>
	 
	 <tr>
	 <td>Course : </td>
	 <td>$course</td>
	 </tr>
	
	<tr>
	<td>Year :</td>
	<td>$year</td>
	</tr>
	 
	 </table>
	 </fieldset>
	 <br/>";
	 
	 if($y==1)
	 {
	 $retval2=mysql_query("select * from cd where UET_ROLL_NO=\"$uet_rno\"   ");
		$row2=mysql_numrows($retval2);
	 }
	 else if($y==2)
		 {
	 $retval2=mysql_query("select * from cd2 where UET_ROLL_NO=\"$uet_rno\"   ");
		$row2=mysql_numrows($retval2);
	 }
	 else if($y==3)
		 {
	 $retval2=mysql_query("select * from cd3 where UET_ROLL_NO=\"$uet_rno\"   ");
		$row2=mysql_numrows($retval2);
	 }
		 
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC)) 
	{
	     $p_address1 = $sql2['p_address1'];
		 $p_address2 = $sql2['p_address2'];
		 $p_city = $sql2['p_city'];
		 $p_state = $sql2['P_STATE'];
		 $p_pincode = $sql2['P_PINCODE'];
		 $p_mobileno = $sql2['P_MOBILENO'];
		 
		 $c_address1 = $sql2['C_ADDRESS1'];
		 $c_address2 = $sql2['C_ADDRESS2'];
		 $c_city = $sql2['C_CITY'];
		 $c_state = $sql2['C_STATE'];
		 $c_pincode = $sql2['C_PINCODE'];
		 $c_mobileno = $sql2['C_MOBILENO'];
		 $c_email = $sql2['EMAIL'];
		 
		 $lg_address1 = $sql2['LG_ADDRESS1'];
		 $lg_address2 = $sql2['LG_ADDRESS2'];
		 $lg_mobileno = $sql['LG_MOBILENO'];
		 
	}
     echo "	
	
	<fieldset>
	<legend>
	<h2>Contact Details</h2>
	</legend>
	<h3>PERMANENT ADDRESS</h3>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>$p_address1 </td>
	 <td>$p_address2</td>
	 </tr>
	 
	
	 
	 <tr>
	 <td>$p_city </td>
	 <td>$p_state</td>
	 </tr>
	 
	 <tr>
	 <td>PINCODE : $p_pincode </td>
	 <td>MOBILE NO : $p_mobileno </td>
	 </tr>
	  
	 </table>
	 
	 <h3>CORRESPONDENCE ADDRESS</h3>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>$c_address1 </td>
	 <td>$c_address2</td>
	 </tr>
	 
	
	 
	 <tr>
	 <td>$c_city </td>
	 <td>$c_state</td>
	 </tr>
	 
	 <tr>
	 <td>PINCODE : $c_pincode </td>
	 <td>MOBILE NO : $c_mobileno </td>
	 <td>E-MAIL ID : $c_email</td>
	 </tr>
	 	 
	 
	 </table>
	 
	 <h3>LOCAL GUARDIAN'S ADDRESS</h3>";
	 if(!$lg_address1)
		 echo "NO LOCAL GUARDIANS ";
	 else
	 {
		 echo"
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>$lg_address1 </td>
	 <td>$lg_address2</td>
	 <td>$lg_mobileno </td>
	 
	 </tr>
	 	 
	 
	 </table>
	 
	 
	 </fieldset>
	 <br/>";
	 }
	 
	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 	 
		 session_start();
		 $_session['sess_user']=$username;
	}
	
	
	
 
echo "<hr><p><h3>For any changes in your profile after submission ,kindly e-mail at helpdeskadminmmv@gmail.com .</h3></p>" ;
	 
 }
 else
 {
	 echo('<p><p><center><h1>PLEASE REGISTER</h1></center></p></p>
	 <p><center><a href="r1.html">REGISTER NOW</a></center>');
 }
 ?>
 
 
 
 