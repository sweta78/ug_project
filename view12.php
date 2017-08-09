html>
<head>
<title>WELCOME</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
</style>
<head>

<?php
 $roomno=$_POST['roomno'];
 $seatno=$_POST['seatno'];
 $name=$_POST['name'];
 
 
 
 $conn=@mysql_connect("localhost","root","root")
        or die("cannot connect");
  $db1=@mysql_select_db("user",$conn) or die("cannot connect");
 
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
 
 
  if(1 === preg_match('/\d/',$name) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN STUDENT's NAME.";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='view2.php'><b><center><h2> FILL THE DETAILS AGAIN </a>WITH PROPER VALUES :-)</h2></center></b>";
}
else
{ 
 $retval=mysql_query("select * from rstatus2 where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\" and NAME=\"$name\" ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retval);
 
 
 if($row!=0)
 {
 
  while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		$uet_roll_no=$sql['UET_ROLL_NO'];
		$retval1=mysql_query("select * from pd2 where UET_ROLL_NO=\"$uet_roll_no\"   ");
		$row1=mysql_numrows($retval1);
		 while($sql1=mysql_fetch_array($retval1, MYSQL_ASSOC)) 
	{
	     $uet_rno = $sql1['UET_ROLL_NO'];
		 $sname = $sql1['NAME'];
		 $fname = $sql1['F_NAME'];
		 //$uetindex = $sql1['UET_INDEX'];
		 $dob = $sql1['DOB'];
		 $cat = $sql1['CATEGORY'];
		 $course = $sql1['COURSE'];
		 $year = $sql1['YEAR'];
		 $img=$sql1['PIC'];
	  //$ph=$sql['PH'];
	}
     echo "	
	
	<fieldset>
	<legend>
	<h2>Personal Detail</h2>
	</legend>
	<img src='photo/$img'>;
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>UET ROLL NO : </td>
	 <td>$uet_rno</td>
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
	 
	 
	 $retval2=mysql_query("select * from cd2 where UET_ROLL_NO=\"$uet_roll_no\"   ");
		$row2=mysql_numrows($retval2);
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
		 $lg_mobileno = $sql2['LG_MOBILENO'];
		 
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
	 <td>$p_address1, </td>
	 <td>$p_address2,</td>
	 </tr>
	 
	
	 
	 <tr>
	 <td>$p_city, </td>
	 <td>$p_state</td>
	 </tr>
	 
	 <tr>
	 <td>PINCODE :$p_pincode </td>
	 <td>MOB. :$p_mobileno </td>
	 </tr>
	  
	 </table>
	 
	 <h3>CORRESPONDENCE ADDRESS</h3>
	<table width='50%' cellpadding='5' cellspacing= '5'>
	<br/>
	 <tr>
	 <td>$c_address1 ,</td>
	 <td>$c_address2,</td>
	 </tr>
	 
	
	 
	 <tr>
	 <td>$c_city, </td>
	 <td>$c_state</td>
	 </tr>
	 
	 <tr>
	 <td>PINCODE :$c_pincode </td>
	 <td>MOB. :$c_mobileno </td>
	 <td>EMAIL :$c_email</td>
	 </tr>
	 	 
	 
	 </table>
	 
	 <h3>LOCAL GUARDIAN'S ADDRESS</h3>";
	 if(!$lg_address1)echo "NO LOCAL GUARDIANS ";
	 else
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
		 
		 
}

else
	echo "NO SUCH STUDENT EXIST";
}
 ?>