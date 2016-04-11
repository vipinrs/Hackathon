<head>
</head>
<body>
<?php 


@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

mysql_query("SELECT * FROM feedback") or die("unable to enter the details into the database");


$result= mysql_query("SELECT * FROM feedback");
echo "<a href=Adminpage.php>click here</a>";
?>


<table>


<?php


while($column=mysql_fetch_row($result))
{
echo "<tr><td>$column[0]<td>"; 
echo "<td>$column[1]<td></tr>";
}
?>

</table>
<h1>

</h1>
</body>
</html>