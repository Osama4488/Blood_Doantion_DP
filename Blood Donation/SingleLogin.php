<?php
include ('User.php');
include ('DatabaseObject.php');
class SingleLogin{ 
   private static $model;
   private SingleLogin(){
   }
   public static function getInstance($username, $password) {
	  $con =  DatabaseObject::getDatabaseConnection();
	  $query = "SELECT * FROM Users Where `username` = ? AND `password` = ?";
	  $response = mysqli_query($con,$query);
	  $res=mysqli_fetch_array($result)
	  if($res != null)
		  return null;
	  $user = new User(); 
	  $user->username = $res['username']
	  $user->password = $res['password'];
	  SingleLogin:model = $user;
	  return SingleLogin::model;
   }
}