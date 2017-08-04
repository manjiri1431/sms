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
<div class="admintitle" align="center"><a href="logout.php" style="float:right; margin-right:30px; color:yellow; font-size:20px;">Logout</a></h4>
<h1>welcome to Admin Dashboard</h1>><div> 
<div class="dashboard" align="center"></div>
<table width="500px">
<tr>
<td>1.</td><td><a href="addstudent.php">Insert student details</td>
</tr>
<tr>
<td>2.</td><td><a href="updatestudent.php">Update student details</td>
</tr>
<tr>
<td>3.</td><td><a href="deletestudent.php">Delete student details</td>
</tr>
</table>
</div>
</body>
</html>