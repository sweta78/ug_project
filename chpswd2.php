<html>
<head>
<title>change password</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('e.jpg');
}
input[type="password"] {
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
<legend>
<center>
<h1>CHANGE PASSWORD </h1>
</center>
</legend>
<hr>
<hr>
<body>
<table border="0" width="100%" height="50%">

<form  method="post" action="chpswd12.php">

     <tr>
     <td>OLD PASSWORD : </td>
	 <td><input type="password" name="opswd" size="15"  required " /><span>*</span>  [ALPHABETS AND NUMERIC VALUES ARE ALLOWED]</td>
	 </tr>
	 
	 <tr>
     <td>NEW PASSWORD : </td>
	 <td><input type="password" name="npswd" size="15"  required " /><span>*</span>  [ALPHABETS AND NUMERIC VALUES ARE ALLOWED]</td>
	 </tr>
	 
	 <tr>
     <td>CONFIRM NEW PASSWORD : </td>
	 <td><input type="password" name="cnpswd" size="15"  required " /><span>*</span>  [ALPHABETS AND NUMERIC VALUES ARE ALLOWED]</td>
	 </tr>
	 
	 
	 </table>
	 </fieldset>
	 <br/>
	 <br/>
	 <center><input type="submit" name="submit" value="submit"></center>
	</form>
	</body>
	</html>