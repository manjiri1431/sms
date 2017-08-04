<?php
session_start();
if(isset($_SESSION['uid']))
{
	header('location:admin/admindash.php');
}
?>
<html>
<head>
<title>admin login</title>
</head>
<body>
<h1 align="center">Admin login</h1>
	<form method="POST" name = "radha" action="login.php">
		<table align="center">
		<tr>
		<td>username:<td><td><input type="text"name="uname" required></td>
		</tr>
		<tr>
		<td>password:<td><td><input type="text"name="pass" required</td>
		</tr>
		<tr>
		<td colspan="2" align="center"></td><td>
		<input type="submit" name="login" value="login" </td>
		</tr>
		</table>
	</form>
</body>
</html>
<?php 
include('dbconn.php');

if(isset($_POST['login']))
{
	
$username=$_POST['uname'];	
$password=$_POST['pass'];
$qry= "SELECT * FROM admin WHERE userid = '$username' AND password = '$password'";
$run=mysqli_query($con,$qry);
$row=mysqli_num_rows($run);
// echo "row is ".$row;
// 	exit;
if($row <1)
{
	?>
<script>
alert('username and password is not match!!');
window.open('login.php','_self');
</script>
<?php	
}
else{
$data=mysqli_fetch_assoc($run);
  $id=$data['id'];
echo "id =".$id;
$_SESSION['uid']=$id;
header('location:admin/admindash.php');
}
}

?>