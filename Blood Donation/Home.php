<?php
session_start();
echo   "Welcome". " " . $_SESSION["un"];

$con = mysqli_connect('localhost','root','','practice');
  if(!$con)
  {
	 echo 'error';
	 
  }
  
  if(isset($_POST['submit_form']) && $_POST['submit_form'] == 'submit')
  {
	  
	  $name = $_POST['name'];
      $bg = $_POST['bg'];
      $contact = $_POST['contact'];
      $address = $_POST['address'];

$query = "INSERT INTO donors SET name='".$name."' , bg='".$bg."' , contact='".$contact."', address='".$address."'";
	  mysqli_query($con,$query);
	  
  }
  
  
  
  
  
  
mysqli_close($con);
?>



<html>
<head>
<title>Main Page</title>

</head>
<body>

<form action="#" method="post">

<h1 class="center">Donor Registration</h1>

<p>  <a href="search.php"> Search  </a>  </p>


<table>

	<tr>
		<td>Name:</td>
		<td><input type="text" name="name"  ></td>
	</tr>
	<tr>
		<td>Blood Group:</td>
		<td><input type="text" name="bg" ></td>
	</tr>
		<tr>
		<td>Contact:</td>
		<td><input type="text" name="contact" ></td>
	</tr>
		<tr>
		<td>Address:</td>
		<td><input type="text" name="address" ></td>
	</tr>
		<tr>
	<input type="hidden" name="submit_form" value="submit" />
		<td colspan="2" align="center"><input type="submit" value="Register" ></td>
	</tr>
</table>

</form>
</body>
</html>



