<html>
<head>
<meta charset="utf-8">
<title>Welcome Mess InCharge</title>
<link rel="icon" type="image/gif" href="mmv.gif">
<style>
body {
	background-image:url('c.jpg');
	font-family: verdana,arial,sans-serif;
	font-size: small;
	padding:5;
}
h1 {
	text-align:center;
}
#content {
    margin:px;
	padding:px;
	width:380px;
	height:230px;
	}
#footer {
	clear:both;
	padding: 5px 5px;
	font-size:20px;
	font-weight: bold;
	padding-top:100px;
}
#footer a {
	color:#FFFFFF;
	text-decoration : none;
	background-color:#999999;
	display:block;
	height:36px;
	padding:5;
	text-align:center;
	line-height:36px;
	border-left-width:thick;
	border-left-style:solid;
	font-family:times new roman,georgia,serif;
	font-size:medium;
	text-transform:uppercase;
}
#footer a:hover {
	background-color:#666666;
}
ul {
	list-style:none;
}
ul li {
	padding:5;
	transition:opacity margin:left;
}
ul li a {
	color:#FFFFFF;
	text-decoration : none;
	background-color:#333333;
	display:block;
	height:36px;
	padding:5;
	text-align:center;
	line-height:36px;
	border-left-width:thick;
	border-left-style:solid;
	border-left-color:#CCCCCC;
	font-family:times new roman,georgia,serif;
	font-size:medium;
	text-transform:uppercase;
}
ul li a:hover {
	background-color:#666666;
}
.noBorder{
	border-left-style:none!important;
}
.leftEdge {
	border-radius: 8px 8px 8px 8px;
}
</style>
</head>
<body>
<h1>DashBoard</h1>
<div id="content">
<ul>
<li><a href='mform.php' target ='target' class="noBorder leftEdge">CALCULATION OF MESS FEES</a></li>

<li><a href='vmfees.php' target = 'target' class="noBorder leftEdge">VIEW MESS FEES</a></li>

<li><a href='upmfees.php' target = 'target' class="noBorder leftEdge">UPDATE STATUS OF PAYMENT</a></li>

<li><a href='vstatus.php' target = 'target' class="noBorder leftEdge">PAYMENT STATUS OF STUDENT</a></li>

<li><a href='vstatusu.php' target = 'target' class="noBorder leftEdge">STUDENT NOT PAID FEES</a></li>
</div>
<br/><br/><br/>
<div id="footer">
<center><b><a href='logout.php' target='_top' class="noBorder leftEdge">LOGOUT</a></b></center>
</div>
</body>
</html>

