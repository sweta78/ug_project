<html>
<head>
<meta charset="utf-8">
<title>WELCOME ADMIN</title>
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
	width:360px;
	height:230px;
	}
#footer {
	clear:both;
	padding: 55;
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
	margin:0;
	padding:0;
}
ul li {
	padding:5;
	transition:opacity margin:left;
	position:relative;
	
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
ul ul li a:hover {
	background-color:#099;
}
ul li a:hover {
	background-color:#666666;
}
ul ul {
	display:none;
	position:absolute;

	margin:5px;
	min-width:350px;
}
ul ul li {
	display:block;
}
ul ul li a,visited {
	color:#ccc;
}
ul li:hover ul {
	display:block;
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
<li><a href='lstudents2.php' target ='target' class="noBorder leftEdge">LIST OF HOSTELLERS</a></li>
<li><a href='atry22.php' target ='target' class="noBorder leftEdge">ALLOTMENT OF SEATS</a></li>
<li><a href='view2.php' target = 'target' class="noBorder leftEdge">VIEW PROFILE OF STUDENT/STUDENTS</a></li>
<li><a href='del2.php' target = 'target' class="noBorder leftEdge">DELETE PROFILE OF STUDENT/STUDENTS</a></li>
<li><a href='def2.php' target = 'target' class="noBorder leftEdge">UPDATE STUDENT/STUDENTS AS DEFAULTER</a></li>
<li><a href='ndues2.php' target = 'target' class="noBorder leftEdge">CONFIRM NO DUES OF STUDENT/STUDENTS</a></li>
<li><a href='#' class="noBorder leftEdge">CATEGORY WISE ALLOTMENT <img src="ad.gif"/></a>
<ul>
  <li><a href='vm2.php' target ='target' class="noBorder leftEdge">MATHEMATICS </a></li>
  <li><a href='vb2.php' target ='target' class="noBorder leftEdge">BIOLOGY </a></li>
  <li><a href='va2.php' target ='target' class="noBorder leftEdge">ARTS </a></li>
  <li><a href='vs2.php' target ='target' class="noBorder leftEdge">SOCIAL SCIENCE </a></li>
  <li><a href='vp2.php' target ='target' class="noBorder leftEdge">PH CATEGORY </a></li>
</ul></li>
</ul>
</div>
<br/>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div id="footer">
<center><b><a href='logout.php' target='_top' class="noBorder leftEdge">LOGOUT</a></b></center>
</div>
</body>
</html>