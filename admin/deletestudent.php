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
?>
<html>
<table align="center">
<form action="deletestudent.php" method="post">
<tr>
<th> Enter u_class</th>
<td><input type="number"name="u_class" placeholder="Enter the class" required></td>
<th>Enter student name</th>
<td><input type="text"name="u_name" placeholder="Enter Student name" required></td>
</tr>
<tr>
<td colspan="4"align="center"><input type="submit"name="submit" value="search" required></td>
</tr>
</form>
</table>
<table align="center" width="80%"; border="1"; style="margin-top:10px">
  <tr>
     <th> NO</th>
    <th>u_name</th>
    <th>u_roll</th>
    <th>Edit</th>
  </tr>

<?php
if(isset($_POST['submit']))
{
include('../dbconn.php');
$standard=$_POST['u_class'];
$name=$_POST['u_name'];
$qry="SELECT * FROM `study` WHERE `u_class`='$standard' AND `u_name` LIKE '%$name%'";
$run=mysqli_query($con,$qry);
if(mysqli_num_rows($run)<1)
{
	echo"<tr><td colspan='5'>No record found</td></tr>";
	
}
else{
	$count=0;
	while($data=mysqli_fetch_assoc($run))
	{
	?>
    <tr>
           <td><?php echo $count;?></td>
           <td><?php echo $data['u_name']?></td>
           <td><?php echo $data['u_roll']?></td>
           <td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</a></td>
     </tr>	
	<?php
	}
		
		
		
		}
  
	
		
	
}
?>