<?php
 //ob_start();
 session_start();
class DataBase{
	private $con =null;
	private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpassword = "";
    private $dbname = "car_db";

   function __construct(){

		//Connect to MySQL Server
		$this->con = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpassword);

		//Select Database
		mysqli_select_db($this->con,$this->dbname) or die(mysqli_error($this->con));

	}
	function Query($sql){
		$result = array();
		$qry_result = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));

		while($row = mysqli_fetch_array($qry_result)) {
			$result[]=$row;
		}

		return $result;
	}
	function execute($sql){
		$result = array();
		$qry_result = mysqli_query($this->con,$sql) or die(mysqli_error($this->con));


		return $qry_result;
	}
}
