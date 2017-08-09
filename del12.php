<html>
<head>
<title>Delete Profile</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
</style>
</head>

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
	echo"<a href='del2.php'><b><center><h2> FILL THE DETAILS AGAIN </a>WITH PROPER VALUES :-)</h2></center></b>";
}
else
{ 
 $retval=mysql_query("select * from rstatus2 where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\"  and  and NAME=\"$name\" ") or die("could not retrieve");
 
 
 
 
 $row=mysql_numrows($retval);

 
 if($row!=0)
 {
  echo "1 record deleted  ";
  while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		$uet_roll_no=$sql['UET_ROLL_NO'];
		$retval1=mysql_query("select * from pdh2 where UET_ROLL_NO=\"$uet_roll_no\"   ");
		$row1=mysql_numrows($retval1);
		 while($sql1=mysql_fetch_array($retval1, MYSQL_ASSOC)) 
	{
	  $category=$sql1['CATEGORY'];
	  $course=$sql1['COURSE'];
	  $ph=$sql1['PH'];
	}
     
     if($ph=='YES')	
	 {
		$up="update hseats set PH=PH+1 where HNAME='DJ'";
		$try=mysql_query($up,$conn); 
	 }
	if(($category=='GEN')||($category=='OBC'))
		{
			if($course=='B.Sc.(Maths)')
			{
				$up="update hseats set GEN_MATH=GEN_MATH+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.Sc.(Bio)')
			{
				$up="update hseats set GEN_BIO=GEN_BIO+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Arts)')
			{
				$up="update hseats set GEN_ARTS=GEN_ARTS+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Social)')
			{
				$up="update hseats set GEN_SOCIAL=GEN_SOCIAL+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
		}
		
		if($category=='SC')
		{
			if($course=='B.Sc.(Maths)')
			{
				$up="update hseats set SC_MATH=SC_MATH+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.Sc.(Bio)')
			{
				$up="update hseats set SC_BIO=SC_BIO+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Arts)')
			{
				$up="update hseats set SC_ARTS=SC_ARTS+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Social)')
			{
				$up="update hseats set SC_SOCIAL=SC_SOCIAL+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
		}
		
		if($category=='ST')
		{
			if($course=='B.Sc.(Maths)')
			{
				$up="update hseats set ST_MATH=ST_MATH+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.Sc.(Bio)')
			{
				$up="update hseats set ST_BIO=ST_BIO+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Arts)')
			{
				$up="update hseats set ST_ARTS=ST_ARTS+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
			if($course=='B.A.(Social)')
			{
				$up="update hseats set ST_SOCIAL=ST_SOCIAL+1 where HNAME='DJ'";
				$try=mysql_query($up,$conn);
			}
		}
		$up1="delete from pdh2 where UET_ROLL_NO=$uet_roll_no";
		$up2="update rstatus2 set STATUS ='VACANT',UET_ROLL_NO=NULL,NAME='' where ROOMNO='$roomno' and SEATNO='$seatno' and NAME = '$name' ";
	$up3="delete from mess2 where ROOMNO=\"$roomno\" and SEATNO=\"$seatno\"  and  and NAME=\"$name\" ";
 	$try3=mysql_query($up3,$conn);
	
	      $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	}
		 
		 
}

else
	echo "NO SUCH STUDENT EXIST";
}
 ?>