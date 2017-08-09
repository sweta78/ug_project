<html>
<head>
<title>Delete Profile</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="text"] {
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
<br/><br/><br/><br/>
<fieldset>
<legend><center><h1>Delete Profile of Student</h1></center></legend>
  <form method='post' action='del13.php'>
 <center> <b>DELETE PROFILE OF STUDENT</b></center>
 <table border="0" width="100%" height="50%">
<table width='75%' cellpadding='5' cellspacing= '5'>
	<br/>
     <tr>
	 <td>ROOM NO : </td>
	 <td><input type='text' name='roomno' size='15' maxlength='25' required ' /><span>*</span> [ENTER NUMERIC VALUE]</td>
	 </tr>
	 <tr>
	 <td>SEAT NO : </td>
	 <td><input type='text' name='seatno' size='15' maxlength='25' required ' /><span>*</span> [ENTER LETTERS ONLY]</td>
	 </tr>
	 <tr>
	 <td>NAME : </td>
	 <td><input type='text' name='name' size='15' maxlength='25' required ' /><span>*</span> [ENTER LETTERS ONLY]</td>
	 </tr>
	 
	 </table>
	  </fieldset>
	 <br/></br/>
	 <center><input type='submit' name='submit' value='submit'></center>
	 </form>
	</body>
	</html>