<?php
$conn = mysql_connect("localhost","root","root") or die ("could not connect to the server" );

 //$put1="update try set h_or_ds='h' where distance>8";
 //$put2="update try set h_or_ds='ds' where distance<8";
 mysql_select_db("user",$conn) or die ("Could not connect to the database");

// $try1=mysql_query($put1,$conn);
 //$try2=mysql_query($put2,$conn);
 //$put4="alter table cd add foreign key(UET_ROLL_NO) references pd";
 //$put3="insert into htry1 select uet_roll_no,uet_index from try where h_or_ds='h' and ROOMNO=3 order by uet_index desc";//"order by uet_index  ";
 //$put4="update try1 set num=num+2 where num=12548";
 //$try4=mysql_query($put4,$conn);
 //mysql_select_db("user",$conn) or die ("Could not connect to the database");
 //$try3=mysql_query($put3,$conn);
//$put5=mysql_query("create table stu_social3 as select UET_ROLL_NO,NAME,UET_INDEX,PERCENTAGE,CATEGORY from stu_social where 1=2");
 
//session_start();
 
 //$user = $_session['sess_user'];
 //echo $user;
 //$put4="insert into cd"
 //if(!$try4)
 //{
//	 echo "not done";
//	 echo "not done";
 //}
// $sql1="update try set ROOMNO=15 where ROOMNO=7 ";
// $retval = mysql_query($sql1) or die(mysql_error());
 //$retval=mysql_query("select * from hseats where HNAME ='DJ' ") or die("could not retrieve");
 //if($retval)
	// echo "not WORKS";
 $retval=mysql_query("select * from hseats where HNAME ='DJ' ") or die("could not retrieve");
 $row=mysql_numrows($retval);
 
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
	
 echo $total_seats ;
 
 ?>
 
 




