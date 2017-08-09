<?php

define('dbhost','localhost');
define('dbname','user');
define('dbuser','root');
define('dbpass','root');

$conn=mysql_connect(dbhost,dbuser,dbpass) or 
      die("cannot connect mysql".mysql_error());

$db=mysql_select_db(dbname,$conn) or die("cannot connect database".mysql_error());

function out_error($error)
{
 echo "<br>";
 return '<ol><li>'.implode('</li><br><li>',$error).'</li></ol>';
}
	 
function reg()
{
		
 $uet_rno = $_POST['uet_rno'];
 $uet_index = $_POST['uet_index'];
 $sname = $_POST['sname']; 
 $fname = $_POST['fname'];
 $mname = $_POST['mname'];
 $dob=$_POST['dob'];
 $percentage = $_POST['percentage'];
 $category = $_POST['category'];
 $ph = $_POST['ph'];
 $course = $_POST['course'];
 $year = $_POST['year'];
 $username = $_POST['username'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 
 $p_address1 = $_POST['p_address1'];
 $p_address2 = $_POST['p_address2'];
 $p_city = $_POST['p_city'];
 $p_state = $_POST['p_state'];
 $p_pincode = $_POST['p_pincode'];
 $p_mobileno = $_POST['p_mobileno'];
 $distance = $_POST['distance'];
 
 $c_address1 = $_POST['c_address1'];
 $c_address2 = $_POST['c_address2'];
 $c_city = $_POST['c_city'];
 $c_state = $_POST['c_state'];
 $c_pincode = $_POST['c_pincode'];
 $c_mobileno = $_POST['c_mobileno'];
 $email = $_POST['email'];
 
 $lg_address1 = $_POST['lg_address1'];
 $lg_address2 = $_POST['lg_address2'];
 $lg_mobileno = $_POST['lg_mobileno'];
 
 if((($_FILES['image1']['type']=='image/jpeg')||($_FILES['image1']['type']=='image/jpg')||($_FILES['image1']['type']=='image/png')||($_FILES['image1']['type']=='image/gif'))&&($_FILES['image1']['size']>0))
	{
			if($_FILES['image1']['error']>0)
			{
				echo "retutn code" .$_FILES['image1']['error'];
			}
			else if (file_exists('photo/'.$_FILES['image1']['error']))
			{
				echo $_FILES['image1']['name']."already exists";
			}
	}
			
 if(1 === preg_match('/\D/',$uet_rno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN UET ROLL NO.";
 }
 
 //if(1 === preg_match('/\D/',$uet_index) )
 //{
  //$error[]="NUMERIC VALUE REQUIRED IN UET INDEX.";
 //}
 
 if(1 === preg_match('/\D/',$percentage) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN XII Percentage.";
 }
 
  if(1 === preg_match('/\d/',$sname) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN STUDENT's NAME.";
 }
 
  if(1 === preg_match('/\d/',$fname) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN FATHER'S NAME.";
 }
 
 if(1 === preg_match('/\d/',$mname) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN MOTHER'S NAME.";
 }
 
// if(0 === preg_match("/^(\d{4})-(\d{2})-(\d{2})$/",$dob)
 //{
//	$error[]="DATE IS NOT IN MENTIONED FORMAT."	 ;
 //}
 
 if(!preg_match('/^([0-9]{4})\/([0-9]{2})\/([0-9]{2})$/',$dob)) 
{
$error[]="DOB  is not a valid dob please enter only year.";
} 
 
  if(1 === preg_match('/\d/',$p_city) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN PERMANENT ADDRESS'S CITY.";
 }
 
  if(1 === preg_match('/\d/',$p_state) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN PERMANENT ADDRESS'S STATE.";
 }
 
   if(1 === preg_match('/\d/',$c_city) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN CORRESPONDENCE ADDRESS'S CITY.";
 }
 
  if(1 === preg_match('/\d/',$c_state) )
 {
  $error[]="NUMERIC VALUE SHOULD NOT BE IN CORRESPONDENCE ADDRESS'S STATE.";
 }
 
 if(1 === preg_match('/\D/',$p_mobileno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN MOBILE NO.";
 }
 
 if(1 === preg_match('/\D/',$p_pincode) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN PINCODE.";
 }
 
 if(1 === preg_match('/\D/',$distance) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN DISTANCE.";
 }
 
 if(1 === preg_match('/\D/',$c_mobileno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN MOBILE NO.";
 }
 
 if(1 === preg_match('/\D/',$c_pincode) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN PINCODE.";
 }
 
 if(1 === preg_match('/\D/',$lg_mobileno) )
 {
  $error[]="NUMERIC VALUE REQUIRED IN LOCAL GUARDIAN'S MOBILE NO.";
 }
 
 if(1 === preg_match('/\s/',$username) )
 {
  $error[]="USERNAME MUST NOT CONTAIN SPACE.";
 }
if(strlen($_POST['password'])<6)
 {
  $error[]="PASSWORD MUST BE AT LEAST 6 CHARACTERS LONG.";
 }
 
  if($_POST['password']!=$_POST['cpassword'])
 {
	 $error[]="PASSWORDS DO NOT MATCH";
 }
 
 if(empty($error)===false)
 {
	echo"<b><i><center><h2>OMG  ERRORS.....</h2></center></i></b><br>";
    echo out_error($error);
	echo"<a href='r1.html'><b><center><h2> REGISTER NOW </a>WITH PROPER VALUES :-)</h2></center></b>";
}
 else
 {
	if(move_uploaded_file($_FILES['image1']['tmp_name'],'photo/'.$_FILES['image1']['name'])) 
	{

      $imgtyp=$_FILES['image1']['type'];
      $img=$_FILES['image1']['name'];
  
 
	}

if($year=='1st yr')	
{
 $sql1="INSERT INTO pd(UET_ROLL_NO,NAME,F_NAME,M_NAME,UET_INDEX,DOB,PERCENTAGE,CATEGORY,PH,COURSE,YEAR,USERNAME,PASSWORD,PIC) VALUES('$uet_rno','$sname','$fname','$mname','$uet_index','$dob','$percentage','$category','$ph','$course','$year','$username','$password','$img')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 $sql2="INSERT INTO cd(UET_ROLL_NO,P_ADDRESS1,P_ADDRESS2,P_CITY,P_STATE,P_PINCODE,P_MOBILENO,DISTANCE,C_ADDRESS1,C_ADDRESS2,C_CITY,C_STATE,C_PINCODE,C_MOBILENO,EMAIL,LG_ADDRESS1,LG_ADDRESS2,LG_MOBILENO) VALUES('$uet_rno','$p_address1','$p_address2','$p_city','$p_state','$p_pincode','$p_mobileno','$distance','$c_address1','$c_address2','$c_city','$c_state','$c_pincode','$c_mobileno','$email','$lg_address1','$lg_address2','$lg_mobileno')";
 $retval1 = mysql_query($sql2) or die(mysql_error());
 
}
if($year=='2nd yr')
{
//echo "working";
$sql1="INSERT INTO pd2(UET_ROLL_NO,NAME,F_NAME,M_NAME,UET_INDEX,DOB,PERCENTAGE,CATEGORY,PH,COURSE,YEAR,USERNAME,PASSWORD,PIC) VALUES('$uet_rno','$sname','$fname','$mname','$uet_index','$dob','$percentage','$category','$ph','$course','$year','$username','$password','$img')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 $sql2="INSERT INTO cd2(UET_ROLL_NO,P_ADDRESS1,P_ADDRESS2,P_CITY,P_STATE,P_PINCODE,P_MOBILENO,DISTANCE,C_ADDRESS1,C_ADDRESS2,C_CITY,C_STATE,C_PINCODE,C_MOBILENO,EMAIL,LG_ADDRESS1,LG_ADDRESS2,LG_MOBILENO) VALUES('$uet_rno','$p_address1','$p_address2','$p_city','$p_state','$p_pincode','$p_mobileno','$distance','$c_address1','$c_address2','$c_city','$c_state','$c_pincode','$c_mobileno','$email','$lg_address1','$lg_address2','$lg_mobileno')";
 $retval1 = mysql_query($sql2) or die(mysql_error());	
}

if($year=='3rd yr')
{
$sql1="INSERT INTO pd3(UET_ROLL_NO,NAME,F_NAME,M_NAME,UET_INDEX,DOB,PERCENTAGE,CATEGORY,PH,COURSE,YEAR,USERNAME,PASSWORD,PIC) VALUES('$uet_rno','$sname','$fname','$mname','$uet_index','$dob','$percentage','$category','$ph','$course','$year','$username','$password','$img')";
 $retval = mysql_query($sql1) or die(mysql_error());
 
 $sql2="INSERT INTO cd3(UET_ROLL_NO,P_ADDRESS1,P_ADDRESS2,P_CITY,P_STATE,P_PINCODE,P_MOBILENO,DISTANCE,C_ADDRESS1,C_ADDRESS2,C_CITY,C_STATE,C_PINCODE,C_MOBILENO,EMAIL,LG_ADDRESS1,LG_ADDRESS2,LG_MOBILENO) VALUES('$uet_rno','$p_address1','$p_address2','$p_city','$p_state','$p_pincode','$p_mobileno','$distance','$c_address1','$c_address2','$c_city','$c_state','$c_pincode','$c_mobileno','$email','$lg_address1','$lg_address2','$lg_mobileno')";
 $retval1 = mysql_query($sql2) or die(mysql_error());	
}

if(($retval)&&($retval1))
 {
	echo "YOU HAVE APPLIED FOR HOSTEL SEAT";
	echo "<a href = 'login.php'><b><center><h2>LOGIN NOW</h2></center></b></a>";
 }
}	



} 

 if(!empty($_POST['username']))
 {
	 //echo "username not empty";
	 //if($year=='1st yr')
  $sql1 = mysql_query("SELECT * FROM pd where USERNAME='$_POST[username]' AND PASSWORD='$_POST[password]' ")or die(mysql_error());
 // else if($year=='2nd yr')
  $sql2 = mysql_query("SELECT * FROM pd2 where USERNAME='$_POST[username]' AND PASSWORD='$_POST[password]' ")or die(mysql_error());
//else if($year=='3rd yr')
	$sql13= mysql_query("SELECT * FROM pd3 where USERNAME='$_POST[username]' AND PASSWORD='$_POST[password]' ")or die(mysql_error());
$row= mysql_numrows($sql1) ;
$row2= mysql_numrows($sql2) ;
$row3= mysql_numrows($sql13) ;

//if($row)
	//echo"1st";
//if($row2)
	//echo "2nd";
//if($row3)
	//echo "3rd";
  if($row || $row2 || $row3)
  {
	  echo "YOU HAVE ALREADY APPLIED FOR HOSTEL";
  }
  else
  {
	// echo"func calling";
	 reg();
	  
  }
 }


?>