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
include('titleahead.php');
include('../dbconn.php');

$sid=$_GET['sid'];
$sql="SELECT * FROM `study` WHERE `id`='$sid'";
//echo $sql;
//exit;
$run=mysqli_query($con,$sql);

$data=mysqli_fetch_assoc($run);

?>

<form method="post" action="updatedata.php">
<table align="center" border="1" style=" width:50%; margin-top:40px;">
<tr>
<th>u_name</th>
<td><input type="text" name="u_name" value="<?php echo $data['u_name'];?>" required></td>
</tr>
<tr>
<th>u_father</th>
<td><input type="text" name="u_father" value="<?php echo $data['u_father'];?>"required ></td>
</tr>
<tr>
<th>u_school</th>
<td><input type="text" name="u_school" value="<?php echo $data['u_school'];?>"required></td>
</tr>
<th>u_roll</th>
<td><input type="text" name="u_roll" value="<?php echo $data['u_roll'];?>"required></td>
</tr>
<tr>
<th>u_class</th>
<td><input type="number" name="u_class" value="<?php echo $data['u_class'];?>" required></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="hidden" name=sid value="<?php echo $data['id'];?>"/>
<input type='submit' name="submit" value="submit" required></td>
</tr>
</table>
</form>