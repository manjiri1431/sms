<?php
	include('../dbconn.php');
	$id=$_REQUEST['sid'];
	
	$qry="DELETE FROM `study` WHERE `id`='$id';";

	$run=mysqli_query($con,$qry);
	if($run==true)
	{
	?>
<script>
alert('data deleted successfully');
 window.open('deletestudent.php?','_self');
</script>	
	<?php	
}	

?>


