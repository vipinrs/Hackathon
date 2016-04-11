<html>
<head>
<link rel="stylesheet" href="pure-min.css" />
    <link rel="stylesheet" href="link.css"/>
       <div id="container"> 
	   <div id="header" style="background-color:lightgreen;float:center">
	   <h1 style="margin-bottom:0;">MUSIC STUDIO</h1>
            <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <ul id="std-menu-items">
        <li><a href="Home.html">Home</a></li>
        <li><a href="first.html">Login</a></li>
        <li><a href="Admin Login.html"> Admin Login</a></li>
		<li><a href="Registration.html">Register</a></li>
        <li><a href="Contact.html">Contact</a></li>
        </ul>
  </div>    </div></div> 
</head>
<body>
<center>
<pre><b>The tempory code to your login is displayed below</b>
<?php
$emailid=$_POST['emailid'];
$num=rand(100000,999999);
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

mysql_query("UPDATE registration SET  password='$num' WHERE emailid='$emailid'") or die("unable to enter the details into the database");

echo " your temporary password is generated use it to sign in ur account &nbsp";

echo "<b>$num</b>";
?>
</pre>
</center>
</body>
</html>