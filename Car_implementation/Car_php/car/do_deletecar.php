<?php
require_once  'model.car.php';
$car = new car();

$id=$_GET['id'];
$result= $car->delete_car( $id );




if($result) {

      header("Location: ../../?content=Car_allcars");
  //header("Car_implementation/Car_Frames/Car_frames.html);
}
?>
