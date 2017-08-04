<?php
session_start();
if(isset($_SESSION['uid']))
{
echo "";
}
else{
	header('location:../login.php');
}
?>
<?php
include('header.php');
?>
<?php
include('header.php');
include('titleahead.php');
?>
<form method="POST" action="addstudent.php" enctype="multipart/form-data">
<table align="center" border="1" style=" width:50%; margin-top:40px;">
<tr>
<th>u_name</th>
<td><input type="text" name="u_name" placeholder="Enter your name" required></td>
</tr>
<tr>
<th>u_father</th>
<td><input type="text" name="u_father" placeholder="Enter your father name" required ></td>
</tr>
<tr>
<th>u_school</th>
<td><input type="text" name="u_school" placeholder="Enter your school name" required></td>
</tr>
<th>u_roll</th>
<td><input type="text" name="u_roll" placeholder="Enter your rollno" required></td>
</tr>
<tr>
<th>U_class</th>
<td><input type="number" name="u_class" placeholder="Enter your class" required></td>
</tr>
<tr>
<td colspan="2" align="center"><input type='submit' name='submit' value="submit" required></td>
</tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	include('../dbconn.php');
	$u_name=$_POST['u_name'];
	$u_father=$_POST['u_father'];
	$u_school=$_POST['u_school'];
	$u_roll=$_POST['u_roll'];
	$u_class=$_POST['u_class'];
	
	$qry="INSERT INTO `study`(`u_name`, `u_father`, `u_school`, `u_roll`, `u_class`) VALUES ('$u_name','$u_father','$u_school','$u_roll','$u_class')";
	// echo $qry;
	// exit;
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	?>
<script>
alert('data inserted successfully');
</script>	
	<?php	
}	
}
?>





