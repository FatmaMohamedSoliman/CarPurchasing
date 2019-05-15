<?php
require_once  'model.customer.php';
$customer = new customer();
//example of update function
  $username ="jaja22";
 $phone=1245887;
 $password='13uh2467';

  $email="aed@mail.com";
  $address="hram";
  $id=4;
$result= $customer->edit_account( $username,$password, $phone, $email, $address, $id );
  var_Dump($result);
?>
