<html>
<head>
    <link rel="stylesheet" href="pure-min.css" />
 <link rel="stylesheet" href="link.css"/>
<div id="container">

<div id="header" style="background-color:lightgreen;float:center">
<h1 style="margin-bottom:0;">MUSIC STUDIO</h1>
     <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <ul id="std-menu-items">
        <li><a href="Logoff.php">Logoff</a></li>

        </ul>
  </div>    </div>
    </div>
    <div id="menu" style="background-color:white;float:left;height:80%;">
 <div class="pure-menu pure-menu-open">
    <a class="pure-menu-heading">User Options</a>
        <ul>
<li><a href="Book.html">Book room</a></li>
<li><a href="Changepassword.html">Changepassword</a></li>
<li><a href="Give feedback.html"> Give Feedback</a></li>
    </ul>
        </div></div>
		</head>
		<center style="background-color:red;"><body>
		
		<b><?php
		session_start();
		
		if(isset($_SESSION['user_email']))
		{
		
		}
		else{
		echo "You can not logg in now";
		die();
		}
		echo "Welcome user: ".$_SESSION['user_email'];
		?></b>
    </body></center>
    <center>
        <footer style="position:absolute;bottom:0;width:100%"><p>Copy rights @all form 2016-2019 John pvt.ltd</p></footer>
    </center>
    <html>