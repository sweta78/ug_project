 <html>
<head>
<title>WELCOME</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
	padding:120;
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

$retval=mysql_query("select * from hseats where HNAME='JK'");// or die("could not retrieve");
 $row=mysql_numrows($retval);
// if($retvalh)
 //echo"success";
//if(!$retvalh)
	//echo "failure";

//$conn) or die("could not retrieve");
 //$row=mysql_numrows($retvalh);
 //if($row)
	// echo"not retrieving";

$retvalmd=mysql_query("delete from stu_math3 ");// or die("could not retrieve");
 
 // $rowmd=mysql_numrows($retvalmd);
  $retvalbd=mysql_query("delete from stu_bio3 ");// or die("could not retrieve");
 // $rowbd=mysql_numrows($retvalbd);
 //if($retvalbd)
//	 echo"bio deleted";
  $retvalad=mysql_query("delete from stu_arts3 ") ;//or die("could not retrieve");
 // $rowad=mysql_numrows($retvalad);
  $retvalsd=mysql_query("delete from stu_social3 ") ;//or die("could not retrieve");
 // $rowsd=mysql_numrows($retvalsd);
  $retvalphd=mysql_query("delete from stu_ph3 ");// or die("could not retrieve");
//  $rowphd=mysql_numrows($retvalphd);
 
 
 $ctblm=mysql_query("insert into stu_math3 select pd3.UET_ROLL_NO,pd3.NAME,pd3.UET_INDEX,pd3.PERCENTAGE,pd3.CATEGORY from pd3,cd3 where pd3.COURSE='B.Sc(Maths)' and pd3.PH='NO' and cd3.DISTANCE>8 and pd3.UET_ROLL_NO=cd3.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctblb=mysql_query("insert into stu_bio3 select pd3.UET_ROLL_NO,pd3.NAME,pd3.UET_INDEX,pd3.PERCENTAGE,pd3.CATEGORY from pd3,cd3 where pd3.COURSE='B.Sc(Bio)' and pd3.PH='NO' and cd3.DISTANCE>8 and pd3.UET_ROLL_NO=cd3.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctbla=mysql_query("insert into stu_arts3 select pd3.UET_ROLL_NO,pd3.NAME,pd3.UET_INDEX,pd3.PERCENTAGE,pd3.CATEGORY from pd3,cd3 where pd3.COURSE='B.A(Arts)' and pd3.PH='NO' and cd3.DISTANCE>8 and pd3.UET_ROLL_NO=cd3.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctbls=mysql_query("insert into stu_social3 select pd3.UET_ROLL_NO,pd3.NAME,pd3.UET_INDEX,pd3.PERCENTAGE,pd3.CATEGORY from pd3,cd3 where pd3.COURSE='B.A(Soc.)' and pd3.PH='NO' and cd3.DISTANCE>8 and pd3.UET_ROLL_NO=cd3.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctblph=mysql_query("insert into stu_ph3 select pd3.UET_ROLL_NO,pd3.NAME,pd3.UET_INDEX,pd3.PERCENTAGE,pd3.CATEGORY from pd3,cd3 where pd3.PH='YES' and cd3.DISTANCE>8 and pd3.UET_ROLL_NO=cd3.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");

 //if(!$ctblm)
//	 echo "could not create table";
 
 //$retval1=mysql_query("select * from htry1 ") or die("could not retrieve");
// $row1=mysql_numrows($retval1);
 
  $retvalm=mysql_query("select * from stu_math3 ") ;//or die("could not retrieve");
  $rowm=mysql_numrows($retvalm);
  $retvalb=mysql_query("select * from stu_bio3 ") ;//or die("could not retrieve");
  $rowb=mysql_numrows($retvalb);
  $retvala=mysql_query("select * from stu_arts3 ");// or die("could not retrieve");
  $rowa=mysql_numrows($retvala);
  $retvals=mysql_query("select * from stu_social3 ") ;//or die("could not retrieve");
  $rows=mysql_numrows($retvals);
  $retvalph=mysql_query("select * from stu_ph3 ") ;//or die("could not retrieve");
  $rowph=mysql_numrows($retvalph);
 
 $retval2=mysql_query("select * from rstatus3 ");// or die("could not retrieve");
 $row2=mysql_numrows($retval2);
 
 
// $vacant=0;
 if($row!=0)
 {
 	while($sql=mysql_fetch_array($retval, MYSQL_ASSOC)) 
	{
		 $total_seats = $sql['TOTAL_SEATS'];
		 
		 $gen_math = $sql['GEN_MATH'];
		 $gen_bio = $sql['GEN_BIO'];
		 $gen_arts = $sql['GEN_ARTS'];
		 $gen_social = $sql['GEN_SOCIAL'];
		 
		 $sc_math = $sql['SC_MATH'];
		 $sc_bio = $sql['SC_BIO'];
		 $sc_arts = $sql['SC_ARTS'];
		$sc_social = $sql['SC_SOCIAL'];
		
		$st_math = $sql['ST_MATH'];
		$st_bio = $sql['ST_BIO'];
		$st_arts = $sql['ST_ARTS'];
		$st_social = $sql['ST_SOCIAL'];
		
		$ph = $sql['PH'];
		 
		 
    }
}
	
 

	
 if(($rowb!=0)||($rowm!=0)||($rowa!=0)||($rows!=0)||($rowph!=0)||($row2!=0))
 {
	 //echo "doing";
	 //alotment for ph
	 
	 $retval3=mysql_query("select * from pryh2,stu_ph3 where pryh2.UET_ROLL_NO=stu_ph3.UET_ROLL_NO and pryh2.DEFAULTER='NO'") ;//or die("could not retrieve");
 $row3=mysql_numrows($retval3);
 //echo $row3;
  if($row3!=0)
{ 
while($sqlt=mysql_fetch_array($retval3,MYSQL_ASSOC))
{
	$urno=$sqlt['UET_ROLL_NO'];
 	while($sqlph=mysql_fetch_array($retvalph, MYSQL_ASSOC)) 
	{//echo "ph alotment ran once";
		 if($ph>0)
		 {
		 $uet_roll_no = $sqlph['UET_ROLL_NO'];
		 //$uet_index = $sqlph['UET_INDEX'];
		 $name = $sqlph['NAME'];
		 
		 
		 
		 if($urno==$uet_roll_no) 
		{
		 
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC))
		 {
		 //$category = $sqlb['CATEGORY'];
		 $status=$sql2['STATUS'];
		 //echo "status fetched for ph once";
		 //echo $status ;
		 //echo $gen_math;
	
	if($status=='VACANT')
	  {
		  // echo "room alotted for ph once";
		 $roomno= $sql2['ROOMNO'];
		  $seatno = $sql2['SEATNO'];
		  $up3="update hseats set PH= $ph - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		 //echo "$uet_roll_no  $name";
		  //$up1="update stu_ph set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO ='$seatno' ";
	      $up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
		  //if($try2)
			//  echo "$ph";
	      $ph=$ph - 1;
		  break;  
      }
	 // else
	//	echo"ALL SEATS FULL .CANNOT ALLOT ROOM";
	  
		 }	  
		
	
		 }
		 else 
			 echo "NO MORE SEATS FOR PH CATEGORY";
	
		 }
}
}
}
   
	
	
	$retval3=mysql_query("select * from pryh2,stu_bio3 where pryh2.UET_ROLL_NO=stu_bio3.UET_ROLL_NO and pryh2.DEFAULTER='NO'") ;//or die("could not retrieve");
 $row3=mysql_numrows($retval3);
  if($row3!=0)
{ 
while($sqlt=mysql_fetch_array($retval3,MYSQL_ASSOC))
{
	$urno=$sqlt['UET_ROLL_NO'];
	//alotment for bio
	while($sqlb=mysql_fetch_array($retvalb, MYSQL_ASSOC)) 
	{//echo "bio alotment ran once";
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqlb['UET_ROLL_NO'];
		 $name = $sqlb['NAME'];
		 $category = $sqlb['CATEGORY'];
		 if($urno==$uet_roll_no) 
		{
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC))
		 {
		 $status=$sql2['STATUS'];
		 //echo "status fetched for bio once";
		 //echo $status ;
		 //echo $gen_math;
	
	if($status=='VACANT')
	  {
		 $roomno= $sql2['ROOMNO'];
		 $seatno = $sql2['SEATNO'];
		 if(($category=='GEN')||($category=='OBC'))
		 {
			 if($gen_bio>0)
			 {
		  $up3="update hseats set GEN_BIO= $gen_bio - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 //echo "room alotted for bio once";
		 // $up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $gen_bio=$gen_bio - 1;
			 }
		  
		  }
	  //}
	    //}
	  //} 
        else 
               if($category=='SC')
		 {
			  if($sc_bio>0)
			  {
		  $up3="update hseats set SC_BIO= $sc_bio - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	      //$try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $sc_bio=$sc_bio - 1;
			  }
		  
		  
	    }	
         else  
              if($category=='ST')
		 {
			  if($st_bio>0)
			  {
		  $up3="update hseats set ST_BIO= $st_bio - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO ='$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $st_bio=$st_bio - 1;
			  }
	    }			 
	break;
	}
 }
 }
	
}
}
   }
   
  $retval3=mysql_query("select * from pryh2,stu_math3 where pryh2.UET_ROLL_NO=stu_math3.UET_ROLL_NO and pryh2.DEFAULTER='NO'");// or die("could not retrieve");
 $row3=mysql_numrows($retval3);
 if($row3!=0)
{ 
while($sqlt=mysql_fetch_array($retval3,MYSQL_ASSOC))
{
	$urno=$sqlt['UET_ROLL_NO'];
	//echo $urno;
	
// echo $row3;
 
 //alotment for maths
	while($sqlm=mysql_fetch_array($retvalm, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqlm['UET_ROLL_NO'];
		 $name = $sqlm['NAME'];
		 $category = $sqlm['CATEGORY'];
		if($urno==$uet_roll_no) 
		{
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC))
		 {
		 $status=$sql2['STATUS'];
		 //echo $status ;
		 //echo $gen_math;
	
	if($status=='VACANT')
	  {
		 $roomno= $sql2['ROOMNO'];
		 $seatno = $sql2['SEATNO'];
		 if(($category=='GEN')||($category=='OBC'))
		 {
			 if($gen_math>0)
			 {
		  $up3="update hseats set GEN_MATH= $gen_math - 1 where HNAME='DJ'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $gen_math=$gen_math - 1;
			 }
		  
		  }
	    //}
	  //} 
        else 
               if($category=='SC')
		 {
			  if($sc_math>0)
			  {
		  $up3="update hseats set SC_MATH= $sc_math - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $sc_math=$sc_math - 1;
			  }
		  
		  
	    }	
         else  
              if($category=='ST')
		 {
			  if($st_math>0)
			  {
		  $up3="update hseats set ST_MATH= $st_math - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	      //$try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $st_math=$st_math - 1;
			  }
	    }
 break;		
	}
	}
	}
	
}
   }
}   
   
  
  $retval3=mysql_query("select * from pryh2,stu_arts3 where pryh2.UET_ROLL_NO=stu_arts3.UET_ROLL_NO and pryh2.DEFAULTER='NO'");// or die("could not retrieve");
 $row3=mysql_numrows($retval3);
 //echo $row3;
 if($row3!=0)
{ 
while($sqlt=mysql_fetch_array($retval3,MYSQL_ASSOC))
{
	$urno=$sqlt['UET_ROLL_NO'];
  
//alotment for arts
	while($sqla=mysql_fetch_array($retvala, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqla['UET_ROLL_NO'];
		 $name = $sqla['NAME'];
		 $category = $sqla['CATEGORY'];
		 if($urno==$uet_roll_no) 
		{
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC))
		 {
		 $status=$sql2['STATUS'];
		 //echo $status ;
		 //echo $gen_math;
	
	if($status=='VACANT')
	  {
		 $roomno= $sql2['ROOMNO'];
		 $seatno = $sql2['SEATNO'];
		 if(($category=='GEN')||($category=='OBC'))
		 {
			 if($gen_arts>0)
			 {
		  $up3="update hseats set GEN_ARTS= $gen_arts - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $gen_arts=$gen_arts - 1;
			 }
		  
		  }
	    //}
	  //} 
        else 
               if($category=='SC')
		 {
			  if($sc_arts>0)
			  {
		  $up3="update hseats set SC_ARTS= $sc_arts - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	      //$try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $sc_arts=$sc_arts - 1;
			  }
		  
		  
	    }	
         else  
              if($category=='ST')
		 {
			  if($st_arts>0)
			  {
		  $up3="update hseats set ST_ARTS= $st_arts - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	      //$try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $st_arts=$st_arts - 1;
			  }
	    }
break;
		 }		
	}

	
   } 
} 
}
}  
  
  
  $retval3=mysql_query("select * from pryh2,stu_social3 where pryh2.UET_ROLL_NO=stu_social3.UET_ROLL_NO and pryh2.DEFAULTER='NO'");// or die("could not retrieve");
 $row3=mysql_numrows($retval3);
 if($row3!=0)
{ 
while($sqlt=mysql_fetch_array($retval3,MYSQL_ASSOC))
{
	$urno=$sqlt['UET_ROLL_NO'];
   //alotment for social
	while($sqls=mysql_fetch_array($retvals, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqls['UET_ROLL_NO'];
		 $name = $sqls['NAME'];
		 $category = $sqls['CATEGORY'];
		 if($urno==$uet_roll_no) 
		{
		 while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC))
		 {
		 $status=$sql2['STATUS'];
		 //echo $status ;
		 //echo $gen_math;
	
	if($status=='VACANT')
	  {
		 $roomno= $sql2['ROOMNO'];
		 $seatno = $sql2['SEATNO'];
		 if(($category=='GEN')||($category=='OBC'))
		 {
			 if($gen_social>0)
			 {
		  $up3="update hseats set GEN_SOCIAL= $gen_social - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $gen_social=$gen_social - 1;
			 }
		  
		  }
	    //}
	  //} 
        else 
               if($category=='SC')
		 {
			  if($sc_social>0)
			  {
		  $up3="update hseats set SC_SOCIAL= $sc_social - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	      //$try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $sc_social=$sc_social - 1;
			  }
		  
		  
	    }	
         else  
              if($category=='ST')
		 {
			  if($st_arts>0)
			  {
		  $up3="update hseats set ST_SOCIAL= $st_social - 1 where HNAME='JK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus3 set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd3 set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $st_social=$st_social - 1;
			  }
	    }
break;
		 }		
	}
	
	
	
   }
   
}
} 
  } 
 }
 
 $retval2=mysql_query("select * from rstatus3 ") ;//or die("could not retrieve");
 $row2=mysql_numrows($retval2);
 echo"<b><strong><center><h2>JK HOSTEL </h2></center></strong></b><br/>";
  if($row2!=0)
 {
	 echo"<center>
	  <table border='0' cellspacing='10' cellpadding= '10'>
	  <tr>
	  <td>LOBBY </td>
	  <td>ROOM NO </td>
	  <td>UET_ROLL_NO </td>
	  <td>NAME </td>
	  </tr>
	  
	  ---------------------------------------------------------------------------------------------------------------------------------------------
	
	  ";
	 //view allotment
 	while($sql2=mysql_fetch_array($retval2, MYSQL_ASSOC)) 
	{
      $lobby=$sql2['LOBBY'];
      $roomno=$sql2['ROOMNO'];
	  $seatno=$sql2['SEATNO'];
	  $name=$sql2['NAME'];
	  $uet_roll_no=$sql2['UET_ROLL_NO'];
	  $status=$sql2['STATUS'];
	  //echo "ststus in output $status";
	  if($status!='VACANT')
	  {
	 echo"
	  <tr>
	  <td>$lobby</td>
	  <td>$roomno-$seatno</td>
	  <td>$uet_roll_no </td>
	  <td>$name </td>
	  </tr>
	  
	  
	  
	  "; 
 
	  }
	}
 }
 echo "</table></center>";
 // }
 $put3=mysql_query("insert into pdh3 select UET_ROLL_NO,NAME,F_NAME,M_NAME,UET_INDEX,DOB,PERCENTAGE,CATEGORY,PH,COURSE,YEAR,USERNAME,PASSWORD,PIC from pd2 where H_OR_DS='H' ");
 $put4=mysql_query("insert into cdh3 select cd2.UET_ROLL_NO,cd2.p_address1,cd2.p_address2,cd2.p_city,cd2.P_STATE,cd2.P_PINCODE,cd2.P_MOBILENO,cd2.DISTANCE,cd2.C_ADDRESS1,cd2.C_ADDRESS2,cd2.C_CITY,cd2.C_STATE,cd2.C_PINCODE,cd2.C_MOBILENO,cd2.EMAIL,cd2.LG_ADDRESS1,cd2.LG_ADDRESS2,cd2.LG_MOBILENO from cd2,pd2 where pd2.UET_ROLL_NO=cd2.UET_ROLL_NO and pd2.H_OR_DS='H'");
 
?>