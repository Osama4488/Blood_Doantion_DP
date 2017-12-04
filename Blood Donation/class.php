<?php
$con = mysqli_connect('localhost','root','','practice');
  if(!$con)
  {
	 echo 'error';
	 
  }
  
  
/*class calculation {
	function my()
	{
		return 'osama';
	}
}
$foo = new calculation;

print $foo->my();
*/


$query  = $query = "SELECT * FROM donors";
  mysqli_query($query);
mysqli_close($con);
?>