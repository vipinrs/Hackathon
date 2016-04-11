</head>
<body>
<?php 

$calender=$_POST['calender'];
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

mysql_query("DELETE FROM booking WHERE calender='$calender'") or die("unable to delete the details into the database");


echo "<a href=Adminpage.php>click here</a>";
?>


<table>


<?php



?>

</table>
<h1>

</h1>
</body>
</html>