<?php

session_start();
$con = mysqli_connect('localhost','root','','practice');
  if(!$con)
  {
	 echo 'error';
	 
  }
  
  
  
  
if(isset($_POST['submit_form']) && $_POST['submit_form'] == 'submit')
{
	$un = $_POST['Username'];
	$pw = $_POST['Password'];
	$_SESSION["un"] = $un;
	
	
	$sql =  "SELECT  id FROM work WHERE Username='".$un."' and Password ='".$pw."'";
	$result = mysqli_query($con,$sql);
	
	$resultCheck = mysqli_num_rows($result);
	
	if($resultCheck > 0)
	{
		
		echo "User Exists";
		header("Location:Home.php");
		
	}
	else {
		
		echo "User Does Not Exists";
	}
	
	
    
}

mysqli_close($con);
?>


<html>
<head>
<title>Admin | Login</title>

</head>
<body>
<form action="#" method="post">

<h1 class="center">LOGIN</h1>

<table>

	<tr>
		<td>Username:</td>
		<td><input type="text" name="Username"  ></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" name="Password" ></td>
	</tr>
		<tr>
	<input type="hidden" name="submit_form" value="submit" />
		<td colspan="2" align="center"><input type="submit" value="Login" ></td>
	</tr>
</table>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</form>
</body>
</html>