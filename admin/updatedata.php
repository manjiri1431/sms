<?php
	include('../dbconn.php');
	$u_name=$_POST['u_name'];
	$u_father=$_POST['u_father'];
	$u_school=$_POST['u_school'];
	$u_roll=$_POST['u_roll'];
	$u_class=$_POST['u_class'];
	$id=$_POST['sid'];
	$qry=UPDATE `study` SET `u_name`='$u_name',`u_father`='$u_father',`u_school`='$u_school',`u_roll`='$u_roll',`u_class`='$u_class'WHERE `id`=$id";
	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	?>
<script>
alert('data inserted successfully');
 window.open('updateform.php?sid=<?php echo $id;?>','_self');
</script>	
	<?php	
}	

?>
