<?php

require_once  'model.customer.php';
$customer = new customer();
//exAmple of registrtion



 $username =$_POST['username'];;
 $phone=$_POST['phone'];;
 $password=$_POST['password'];;

  $email=$_POST['email'];;
  $address=$_POST['address'];;
$result= $customer->registration( $username,$password, $phone, $email, $address );
  //var_Dump($result);
  if($result) {
        header("Location: ../../");
  }
  else {
      header("Location: ../../?Message=some thing went wrong");
  }
?>
