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

 $retval=mysql_query("select * from hseats where HNAME='SK'");// or die("could not retrieve");
 $row=mysql_numrows($retval);
 //echo $row;
 
 $retvalmd=mysql_query("delete from stu_math ");// or die("could not retrieve");
 
 // $rowmd=mysql_numrows($retvalmd);
  $retvalbd=mysql_query("delete from stu_bio ");// or die("could not retrieve");
 // $rowbd=mysql_numrows($retvalbd);
 //if($retvalbd)
//	 echo"bio deleted";
  $retvalad=mysql_query("delete from stu_arts ") ;//or die("could not retrieve");
 // $rowad=mysql_numrows($retvalad);
  $retvalsd=mysql_query("delete from stu_social ") ;//or die("could not retrieve");
 // $rowsd=mysql_numrows($retvalsd);
  $retvalphd=mysql_query("delete from stu_ph ");// or die("could not retrieve");
//  $rowphd=mysql_numrows($retvalphd);
 
 
 
 
 
 $ctblm=mysql_query("insert into stu_math select pd.UET_ROLL_NO,pd.NAME,pd.UET_INDEX,pd.PERCENTAGE,pd.CATEGORY from pd,cd where pd.COURSE='B.Sc(Maths)' and pd.PH='NO' and cd.DISTANCE>8 and pd.UET_ROLL_NO=cd.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctblb=mysql_query("insert into stu_bio select pd.UET_ROLL_NO,pd.NAME,pd.UET_INDEX,pd.PERCENTAGE,pd.CATEGORY from pd,cd where pd.COURSE='B.Sc(Bio)' and pd.PH='NO' and cd.DISTANCE>8 and pd.UET_ROLL_NO=cd.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctbla=mysql_query("insert into stu_arts select pd.UET_ROLL_NO,pd.NAME,pd.UET_INDEX,pd.PERCENTAGE,pd.CATEGORY from pd,cd where pd.COURSE='B.A(Arts)' and pd.PH='NO' and cd.DISTANCE>8 and pd.UET_ROLL_NO=cd.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctbls=mysql_query("insert into stu_social select pd.UET_ROLL_NO,pd.NAME,pd.UET_INDEX,pd.PERCENTAGE,pd.CATEGORY from pd,cd where pd.COURSE='B.A(Soc.)' and pd.PH='NO' and cd.DISTANCE>8 and pd.UET_ROLL_NO=cd.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");
 $ctblph=mysql_query("insert into stu_ph select pd.UET_ROLL_NO,pd.NAME,pd.UET_INDEX,pd.PERCENTAGE,pd.CATEGORY from pd,cd where pd.PH='YES' and cd.DISTANCE>8 and pd.UET_ROLL_NO=cd.UET_ROLL_NO order by UET_INDEX,PERCENTAGE desc ");

 //if(!$ctblm)
//	 echo "could not create table";
 
 //$retval1=mysql_query("select * from htry1 ") or die("could not retrieve");
// $row1=mysql_numrows($retval1);
 
  $retvalm=mysql_query("select * from stu_math ");// or die("could not retrieve");
  $rowm=mysql_numrows($retvalm);
  $retvalb=mysql_query("select * from stu_bio ");// or die("could not retrieve");
  $rowb=mysql_numrows($retvalb);
  $retvala=mysql_query("select * from stu_arts ");// or die("could not retrieve");
  $rowa=mysql_numrows($retvala);
  $retvals=mysql_query("select * from stu_social ");// or die("could not retrieve");
  $rows=mysql_numrows($retvals);
  $retvalph=mysql_query("select * from stu_ph ");// or die("could not retrieve");
  $rowph=mysql_numrows($retvalph);
 
 $retval2=mysql_query("select * from rstatus ");// or die("could not retrieve");
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
 	while($sqlph=mysql_fetch_array($retvalph, MYSQL_ASSOC)) 
	{//echo "ph alotment ran once";
		 if($ph>0)
		 {
		 $uet_roll_no = $sqlph['UET_ROLL_NO'];
		 //$uet_index = $sqlph['UET_INDEX'];
		 $name = $sqlph['NAME'];
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
		  $up3="update hseats set PH= $ph - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		 //echo "$uet_roll_no  $name";
		  //$up1="update stu_ph set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO ='$seatno' ";
	      $up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
   
	
	
	
	//alotment for bio
	while($sqlb=mysql_fetch_array($retvalb, MYSQL_ASSOC)) 
	{//echo "bio alotment ran once";
		// if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqlb['UET_ROLL_NO'];
		 $name = $sqlb['NAME'];
		 $category = $sqlb['CATEGORY'];
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
		 
		 //echo "$roomno";
		 //echo "$seatno";
		 if(($category=='GEN')||($category=='OBC'))
		 {
			 if($gen_bio>0)
			 {
		  $up3="update hseats set GEN_BIO= $gen_bio - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 //echo "room alotted for bio once";
		 // $up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
		  $try2=mysql_query($up2,$conn);
	      $up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      
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
		  $up3="update hseats set SC_BIO= $sc_bio - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set ST_BIO= $st_bio - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_bio set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO ='$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
		  $try3=mysql_query($up3,$conn);
	
	     // $try1=mysql_query($up1,$conn);
	      $try2=mysql_query($up2,$conn);
	      $st_bio=$st_bio - 1;
			  }
	    }			 
	break;
	}
 }
//}	
	
   }
   
   
 //alotment for maths
	while($sqlm=mysql_fetch_array($retvalm, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqlm['UET_ROLL_NO'];
		 $name = $sqlm['NAME'];
		 $category = $sqlm['CATEGORY'];
		 
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
		  $up3="update hseats set GEN_MATH= $gen_math - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name' where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set SC_MATH= $sc_math - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno'";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set ST_MATH= $st_math - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_math set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
   
  
//alotment for arts
	while($sqla=mysql_fetch_array($retvala, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqla['UET_ROLL_NO'];
		 $name = $sqla['NAME'];
		 $category = $sqla['CATEGORY'];
		 
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
		  $up3="update hseats set GEN_ARTS= $gen_arts - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set SC_ARTS= $sc_arts - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set ST_ARTS= $st_arts - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_arts set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
  
   
   //alotment for social
	while($sqls=mysql_fetch_array($retvals, MYSQL_ASSOC)) 
	{
		 //if($gen_bio>0)
		 //{
		 $uet_roll_no = $sqls['UET_ROLL_NO'];
		 $name = $sqls['NAME'];
		 $category = $sqls['CATEGORY'];
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
		  $up3="update hseats set GEN_SOCIAL= $gen_social - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set SC_SOCIAL= $sc_social - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		 // $up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
		  $up3="update hseats set ST_SOCIAL= $st_social - 1 where HNAME='SK'";
		  $try3=mysql_query($up3,$conn);
		 
		  //$up1="update stu_social set ROOMNO=$roomno,SEATNO=$seatno,STATUS='ALLOTED' where UET_ROLL_NO=$uet_roll_no";
	      $up2="update rstatus set STATUS = 'ALOTTED',UET_ROLL_NO='$uet_roll_no',NAME='$name'  where ROOMNO='$roomno' and SEATNO = '$seatno' ";
	$up3="update pd set H_OR_DS = 'H' where UET_ROLL_NO = '$uet_roll_no'";
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
 
 $retvalr=mysql_query("select * from rstatus ");// or die("could not retrieve");
 $rowr=mysql_numrows($retvalr);
 echo"<b><strong><center><h2>SK HOSTEL </h2></center></strong></b><br/>";
  if($rowr!=0)
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
 	while($sqlr=mysql_fetch_array($retvalr, MYSQL_ASSOC)) 
	{ //echo "ran once";
      $lobby=$sqlr['LOBBY'];
      $roomno=$sqlr['ROOMNO'];
	  $seatno=$sqlr['SEATNO'];
	  $name=$sqlr['NAME'];
	  $uet_roll_no=$sqlr['UET_ROLL_NO'];
	  $status=$sqlr['STATUS'];
	  //echo "ststus in output $status";
	  if($status!='VACANT')
	  {
	 echo"
	  <tr><td>$lobby</td>
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
 $put3=mysql_query("insert into pdh select UET_ROLL_NO,NAME,F_NAME,M_NAME,UET_INDEX,DOB,PERCENTAGE,CATEGORY,PH,COURSE,YEAR,USERNAME,PASSWORD,PIC from pd where H_OR_DS='H' ");
 $put4=mysql_query("insert into cdh select cd.UET_ROLL_NO,cd.p_address1,cd.p_address2,cd.p_city,cd.P_STATE,cd.P_PINCODE,cd.P_MOBILENO,cd.DISTANCE,cd.C_ADDRESS1,cd.C_ADDRESS2,cd.C_CITY,cd.C_STATE,cd.C_PINCODE,cd.C_MOBILENO,cd.EMAIL,cd.LG_ADDRESS1,cd.LG_ADDRESS2,cd.LG_MOBILENO from cd,pd where pd.UET_ROLL_NO=cd.UET_ROLL_NO and pd.H_OR_DS='H'");
 
?>