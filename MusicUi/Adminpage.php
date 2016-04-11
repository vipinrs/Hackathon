<html>
<head>
    <link rel="stylesheet" href="pure-min.css" />
 <link rel="stylesheet" href="link.css"/>
<div id="container">

<div id="header" style="background-color:lightgreen;float:center">
<h1 style="margin-bottom:0;">MUSIC STUDIO</h1>
     <div class="pure-menu pure-menu-open pure-menu-horizontal">
    <ul id="std-menu-items">
        <li><a href="Logoff1.php">Logoff</a></li>
        </ul>
  </div>    </div>
    </div>
	

<div id="menu" style="background-color:white;float:left;height:80%">
 <div class="pure-menu pure-menu-open">
    <a class="pure-menu-heading">Admin Options</a>
        <ul>
		
		
		
<li><a href="Booking.php">View Bookings</a></li>       
<li><a href="CancelBooking.html">Cancel Bookings</a></li>
<li><a href="User feedback.html">User feedback</a></li>
    </ul>
        </div></div>
		</head>
		<center style="background-color:red;"><body>
		
		<b><?php
		session_start();
		
		if(isset($_SESSION['admin_email']))
		{
		
		}
		else{
		echo "You can not logg in now";
		die();
		}
		echo "Welcome admin: ".$_SESSION['admin_email'];
		?></b>
</body>
<center>
<footer style="position:absolute;bottom:0;width:100%">
<p>Copy rights @all form 2016-2019 John pvt.ltd</p></footer>
</center>


</html>