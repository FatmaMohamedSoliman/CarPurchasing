<?php
require_once  'model.car.php';
$car = new car();






//example of registrtion
$customer =$_POST['id'];
$id =$_POST['id'];
$result= $car->reserve($customer, $id);
if($result){
  header("Location: .");
}
?>
