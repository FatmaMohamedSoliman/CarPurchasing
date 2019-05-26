
<?php
//login example
require_once  'model.customer.php';
if(isset($_POST['username'])){
$customer = new user();



//var_Dump($customer->get_all("id>2 ","phone ASC"));
$username =$_POST['username'];//"jaja22";//$_POST['username']
$password=$_POST['password'];///'13uh2467';//

$result =$customer->login($username, $password);
  if($result) {

    		header("Location: ../../");
    //header("Car_implementation/Car_Frames/Car_frames.html);
  }
  else {
      header("Location: ../../?Message=worng username or password");
  }
}
 ?>
