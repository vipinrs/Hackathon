<html>
<head>
</head>
<body>
<?php
echo "please wait loading..";
session_start();
if(isset($_POST['submit']))
{
@mysql_connect("localhost","root","") or die("<p>Unable to connect to server");

@mysql_select_db("musicstudio") or die("<p>Unable to connect to database");

$username=$_POST['username'];
$password=$_POST['password'];
if(!$_POST['username'] | !$_POST['password'])
{
	echo "Enter username and password";
	  
}
$result=mysql_query("SELECT username,password FROM registration WHERE username='$username' AND password='$password' LIMIT 1");
$count=mysql_num_rows($result);

if($count>0)
{
echo "Login successfull";
$_SESSION['is_logged_in']=true;
$_SESSION['user_email']=$username;
header('Location:http://localhost/MusicUi/Userpage.php');
}
else 
{
echo "Given username and password is incorrect";
}
}
else
{
	echo "error";
}
?>


</body>
</html>