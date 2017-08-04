<html>
<head>
<title>students management Form</title>
</head>
<body>
<h3 align="right" style="margin-right:20px"><a href="login.php">Admin login</a></h3>
<h1 align="center">welcome to student management system</h1>
<form method="POST" action="index.php">
<table width="500" height="300"border="3" align="center">>
<tr>
<th bgcolor="blue" colspan="6">students registration form</th></tr>
<tr>
<td align="right">u_roll</td>
<td><input type="text" name="u_roll"required></td></tr>
<tr><td align="right">u_class</td>
<td>
<select name='u_class'required>
<option value='null'>select class</option>

<option value='1'>1st</option>
<option value='2'>2nd</option>
<option value='3'>3rd</option>
<option value='4'>4th</option>
</td>
</tr>
<tr>
<td align="center"colspan="6"><input type="submit" name="submit"value="show info"></td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$u_roll= $_POST['u_roll'];
	$u_class= $_POST['u_class'];
	include('dbconn.php');
	include('function.php');
	showdetails($u_roll,$u_class);
	
}

?>











