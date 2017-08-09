<html>
<head>
<title>Profile of Student</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="text"] {
	padding:5px;
	width:30%;
}
input[type="submit"] {
	padding:5px;
	width:20%;
	font-size:25px;
	}
span {
	color:red;
}
</style>
</head>
<body>
<br/><br/><br/><br/>
<fieldset>
<legend><center><h1>Profile of Student</h1></center></legend>
<table border="0" width="100%" height="50%">
  <form method='post' action='view13.php'>
 <center> <b>VIEW PROFILE OF STUDENT</b></center>
<table width='75%' cellpadding='5' cellspacing= '5'>
	<br/>
     <tr>
	 <td>ROOM NO : </td>
	 <td><input type='text' name='roomno' size='15' maxlength='25' required ' /><span>*</span> [ENTER NUMERIC VALUE]</td>
	 </tr>
	 <tr>
	 <td>SEAT NO : </td>
	 <td><input type='text' name='seatno' size='15' maxlength='25' required ' /><span>*</span>[ENTER LETTERS ONLY] </td>
	 </tr>
	 <tr>
	 <td>NAME : </td>
	 <td><input type='text' name='name' size='15' maxlength='25' required ' /><span>*</span> [ENTER LETTERS ONLY]</td>
	 </tr>
	 
	 </table>
	 </fieldset>
	 <br/>
	 <br/>
	 <center><input type='submit' name='submit' value='submit'></center>
	 </form>
	</body>
	</html>