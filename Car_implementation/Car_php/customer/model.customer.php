<?php
require_once  __DIR__	.'\..\database.php';

class customer{
	private $d = null;
	function __construct(){
		$this->d = new DataBase();
	}

	function login($username, $password)
	{
		$customer_login = $this->d->query("select `id`, `username`, `phone`, `email`, `address`
		FROM `customer`
		where `username` = '$username' AND password ='$password' ");
		if(count($customer_login)== 1){
			  $_SESSION['user_data'] = $customer_login[0];
			return $customer_login[0];
		}
		else
		{
			return false;
		}
	}
	function logout(){
		unset($_SESSION['user_data']);
		return true;
	}
	/**
	@param where_cl string username = 'xyz'
	*/
	function get_all($where_cl = "",$order_cl="")
	{
		$sql_customer_data_query = "select `id`, `username`, `phone`, `email`, `address`  FROM `customer`";

		if($where_cl != ""){
			$sql_customer_data_query .= " where $where_cl ";
		}

		if($order_cl != ""){
			$sql_customer_data_query .= " order by $order_cl ";
		}

		$allucustomers = $this->d->query($sql_customer_data_query);
		return $allucustomers;
	}
	function registration( $username, $password,$phone, $email, $address )
	{
		$sql = "INSERT INTO customer(`username`,`password`, `phone`, `email`, `address`)
							VALUES ('$username', '$password','$phone', '$email' , '$address')";
		$sql_insert_result=$this->d->execute($sql);
		return $sql_insert_result;
	}
	function edit_account($username, $password,$phone, $email, $address, $id){
		$sql = "UPDATE `customer` SET
		`username`='$username',
		`phone`='$phone',
		`email`='$email',
		`address`='$address',
		`password`='$password'

		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}

	function reserve(){


	}
}
