<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
	body{
  margin:0;
  color:#FDFEFE  ;
  background:url(Apex-Legends-Wallpapers.jpg) no-repeat ;
  background-attachment: fixed;
  background-size: cover;
}
	</style>
</head>
<body>
<?php
$uname=$_POST['username'];
$uid=$_POST['userid'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];
$email=$_POST['email'];
$host='localhost:3306';
$user='root';
$pwd='';
$db='gamingbaba';
$conn=mysqli_connect($host,$user,$pwd,$db);
$q1="insert into user values('$uname','$uid','$pass','$email');";
if($pass==$cpass){
if (mysqli_query($conn,$q1)) {
	?>
	<br>
	<h1 align="center">Registration Sucessful</h1>
	<h1 align="center"><a href="login.html" align="center">Go to Login</a></h1>
	<?php	
}
else
{	
	?>
	<br>
	<h1 align="center">Registration Unsucessful</h1>
	<h1 align="center"><a href="login.html" align="center">Go to Registration</a></h1>
	<?php	
}
}
else
{
	?>
	<h1 align="center">Password and Confirm Password Does not match<h1>
	<?php
}
?>
</body>
</html>
