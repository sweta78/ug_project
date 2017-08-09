<html>
<head>
<title>mess</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="password"] {
	padding:5px;
	width:30%;
	background-color:#;
}
input[type="submit"] {
	padding:10px;
	width:30%;
	font-size:25px;
	}
span {
	color:red;
}
</style>
</head>
<body>
<center>
<h1>MESS FORM </h1>
</center>
<fieldset>

<table border="0" width="100%" height="50%">

<form  method="post" action="mfees3.php">
<table width='75%' cellpadding='5' cellspacing= '5'>

     <tr>
     <td>ROOM NO : </td>
	 <td><input type="text" name="roomno" size="3"  required " /><span>*</span> [ENTER NUMERIC VALUE]</td>
	 </tr>
	 
	 <tr>
     <td>SEAT NO : </td>
	 <td><input type="text" name="seatno" size="3"  required " /><span>*</span> [ENTER LETTER ONLY]</td>
	 </tr>
	 <tr>
	 <td>STUDENT'S NAME : </td>
	 <td><input type="text" name="sname" size="35" maxlength="25" required /><span>*</span> [ONLY ALPHABETS ALLOWED]</td>
	 </tr>
	 <tr>	 
	 <td>NO. OF DAYS EATEN IN MESS : </td>
	 <td><input type="text" name="days" size="2"  required " /><span>*</span> [ENTER NUMERIC VALUE]</td>
	 </tr>
	 
	 <tr>
	 <td>EXTRA CHARGE : </td>
	 <td><input type="text" name="extra_charge" size="3"  required " /><span>*</span> [ENTER NUMERIC VALUE]</td>
	 </tr>
	 
	 <tr>
	 <td>DESCRIPTION FOR EXTRA CHARGE : </td>
	 <td><input type="text" name="description" size="150"  required " />* </td>
	 </tr>
	 </table>
	 </fieldset>
	 <br/><br/>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>