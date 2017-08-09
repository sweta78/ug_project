<head>
<title>Admin Login</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style>
body {
	background-image:url('y.jpg');
}
</style>
</head>




<?php
$connection = mysql_connect("localhost","root","root") or die ("could not connect to the server" );
mysql_select_db("user",$connection) or die ("Could not connect to the database");
echo"
<body style='font-family:verdana,sans-serif;'>
<center><img src='login.jpg' height='250' width='950'/></center>
<div style='width : 80%; padding : 5px 15px 5px; border:1px'>
<center><h1>Admin Login</h1>
<br />
<form action='alogin1.php' method='post'>
<fieldset>
<br/><br/>
     <table>
	 <tr>
	 <td><span class='glyphicon glyphicon-user'></span></td>
	 <td><b>Username : </b></td>
	 <td><input type ='text' name='username'/></td>
	 </tr>
	 <tr>
	 <td><br/></td>
	 </tr>
	 <tr>
	 <td> <span class='glyphicon glyphicon-lock'></span></td>
	 <td><b>Password : </b></td>
	 <td><input type ='password' name='password'/></td>
	 </tr>
	 <tr>
	 <td><br/></td>
	 </tr>
	 <tr>
	 <td><input type='submit' value='Login' name='login'/></td>
	 </tr>
	 </table>
	 </fieldset>
</form>
<br/>
</div>
</center>
</body>
";
?>



