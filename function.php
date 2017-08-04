<?php
  function showdetails($u_roll,$u_class)
  {
	  
	  include('dbconn.php');
	  $sql="SELECT * FROM `study` WHERE `u_roll`='$u_roll' AND `u_class`='$u_class'";
	  //echo $sql;
	  //exit;
	  $run=mysqli_query($con,$sql);
	  if(mysqli_num_rows($run)>0)
	  {
		  $data=mysqli_fetch_assoc($run);
		  ?>
		  <table border="1" width="500px" height="200px">
		  <tr>
		  <th colspan="2"> students details<th>
		  </tr>
		  <tr>
		  <th>Name </th>
		  <td><?php echo $data['u_name']; ?></td>
		  </tr>
		 <tr>
		  <th>father name </th>
		  <td><?php echo $data['u_father']; ?></td>
		  </tr>
		  <th>school name </th>
		  <td><?php echo $data['u_school']; ?></td>
		 </tr>
		  <th>class name </th>
		  <td><?php echo $data['u_class']; ?></td>
		  </tr>
		 </table>
		
<?php		
}
		 else{
			echo"<script>alert('No Student Found');</script>"; 
			 
		 }
  }	
?>





































