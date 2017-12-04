<?php
class DatabaseObject { 
    private static $con;
	private $serverAddress = "localhost";
	private $ser = "root";
	private $password = "";
	private $database = "practice";
	private $obj = null;
	private DatabaseObject(){
		this.con = mysqli_connect(this.serverAddress,this.user,this.database);
		if(!this.con){
			die("Connection Failed!");
		}
	}
	__destruct(){
		mysqli_close(this.con);
	}
	
	public static function getDatabaseConnection(){
		if(obj == null)
			obj = new DatabaseObject();
		return obj;
	}
}
