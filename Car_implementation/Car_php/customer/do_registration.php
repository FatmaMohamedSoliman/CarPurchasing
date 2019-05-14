<?php

require_once  'model.customer.php';
$customer = new customer();
//exAmple of registrtion 
 
 $username ="jaja";
 $phone=1245887;
 $password='13uh2467';
  
  $email="aed@mail.com";
  $address="hram";
$result= $customer->registration( $username,$password, $phone, $email, $address );
  var_Dump($result);
?>