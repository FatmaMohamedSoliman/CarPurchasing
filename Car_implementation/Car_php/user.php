<?php
require_once  __DIR__	.'\database.php';
class user
{
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

  function car_search()
  {

  }
}
?>
