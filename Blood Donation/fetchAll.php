<?php
$con = mysqli_connect('localhost','root','','practice');
  if(!$con)
  {
	 echo 'error';
	 
  }
  
  
 $show = "SELECT * FROM donors";
  $result = mysqli_query($con,$show);
  
  while($res=mysqli_fetch_array($result))
  {
	  
?>

<tr>

<td> <?php echo $res['name']   ?>  </td><td> <?php  echo $res['bg']   ?>  </td><td> <?php echo $res['contact']    ?>  </td><td> <?php  echo $res['address']   ?>  </td>

</tr>


<?php
  }
  
  mysqli_close($con);
?>

<html>
<head>

</head>


<body>

</body>


</html>