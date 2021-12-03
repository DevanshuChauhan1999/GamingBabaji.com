<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$uid=$_POST['username'];
$pwd=$_POST['password'];
$conn=mysqli_connect('localhost:3306','root','','gamingbaba');
$query="select * from user where uid='$uid' AND password='$pwd' ";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
	 $data=$row["uname"];
	echo "$data";
}
?>
</body>
</html>
