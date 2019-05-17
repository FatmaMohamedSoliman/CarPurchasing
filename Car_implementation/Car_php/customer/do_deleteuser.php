<?php
require_once  'model.customer.php';
$customer = new user();

$id=$_GET['id'];
$result= $customer->delete_user( $id );

if($result) {

      header("Location: ../../?content=Car_allusers");
  //header("Car_implementation/Car_Frames/Car_frames.html);
}
?>
