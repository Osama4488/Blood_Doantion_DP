<?php
$con = mysqli_connect('localhost','root','','practice');
  if(!$con)
  {
	 echo 'error';
	 
  }

if(isset($_POST['submit_form']) && $_POST['submit_form'] == 'submit')
{
	
	$bg = $_POST['bg'];
	
	$query = "SELECT * from donors WHERE bg = '".$bg."'";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result) > 0)
	{
			echo "it is available";
           		
	}
	else 
	{
		echo "Not found";
		
	}

	
	
}
  
  mysqli_close($con);
  
class BloodFactory { 
	public static function getBlood($bg){
		$query = "SELECT * from donors WHERE bg = '".$bg."'";
		$result = mysqli_query($con,$query);
		if(mysqli_num_rows($result) > 0)
		{	
			$bg =new BloodGroup($result['bg']);
			return $bg;
		}
		return null;
	}
}
class BloodGroup {
	public $bloodtype;
	public function __construct($blood){
		$this->bloodtype = $blood;
	}
}
  
?>






<html>
<head>
<title>Search Donors</title>

</head>
<body>

<form action="#" method="post">

<h1 class="center">Search</h1>

<table>

	<tr>
		<td>Search Blood Group</td>
		<td><input type="text" name="bg"  ></td>
	</tr>
	
		<tr>
	<input type="hidden" name="submit_form" value="submit" />
		<td colspan="2" align="center"><input type="submit" value="Search" ></td>
	</tr>
</table>


<p>  <a href="Home.php"> Back </a>  </p>
<br/><br/><br/>
DONOR LIST:: <br/><br/><br/>

<table cellpadding="5" border= "1">

<tr>
<th>Name</th><th>Blood Group</th><th>Contact</th><th>Address</th>

<?php

include('fetchAll.php');

?>




</tr>

</table>



</form>
</body>
</html>
