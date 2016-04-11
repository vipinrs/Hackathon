<html>
<head>
</head>
<body>
<?php
 
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$emailid=$_POST['emailid'];
$phonenumber=$_POST['phonenumber'];
$sex=$_POST['sex'];
$address=$_POST['address'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

mysql_query("INSERT INTO registration VALUES('$name','$username','$password','$emailid','$phonenumber','$sex','$address')") or die("unable to enter the details into the database");

echo "registered successfully";

echo "<a href=Home.html>click here</a>";
?>

<table border=1>
<?php



 



?>
</table>
<h1>

</h1>
</body>
</html>