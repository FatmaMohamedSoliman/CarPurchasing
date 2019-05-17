<?php
require_once  'model.customer.php';
$customer = new user();
//example of update function
  $email=$_POST[email];
  $address=$_POST[address];



$result= $customer->edit_account($id, $email, $address );
//  var_Dump($result);
?>
