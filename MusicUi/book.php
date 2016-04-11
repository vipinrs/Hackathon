<head>
</head>
<body>
<?php 

$username=$_POST['username'];
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$calender=$_POST['calender'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

mysql_query("INSERT INTO booking VALUES('$username','$name','$emailid','$calender')") or die("unable to enter the details into the database please select a different date since it is already booked");


echo "<a href=Userpage.php>click here</a>";
?>


<table>


<?php



?>

</table>
<h1>

</h1>
</body>
</html>