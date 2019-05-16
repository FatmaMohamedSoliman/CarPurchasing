<?php
require_once  __DIR__.'/../car/model.car.php';
if(!isset($_SESSION['user_data'])){
	  echo "<center>you have to login into your account to access this page </center>";
    return;
}
$car = new car();
if(isset($_POST['id'])){
  $customer =$_SESSION['user_data']['id'];
  $id =$_POST['id'];
  $result= $car->reserve($customer, $id);



// if($result){
//   header("Location: .");
// }
}
//to handle the view default vlaue for editing operation
$carObj = null;
if(isset($_GET['id'])){
  $carlist = $car->get_all("id = ".$_GET['id'],"");
  $carObj = $carlist[0];
}
?>

    status:<?php echo $carObj['status'] ; ?><br>
    <?php if($carObj['status'] == 'reserved'){ ?>
      reserved date: <?php
      echo $carObj['reservationdate'];
      ?> <br>
      reservation expire: <?php
      echo date('Y-m-d',strtotime($carObj['reservationdate']. ' + 1 days')) ;
      ?> <br>
      <?php } ?>
		model: <?php echo $carObj['model'] ; ?> <br>
		color: <?php echo $carObj['color'] ; ?> <br>
		price: <?php echo $carObj['price'] ; ?><br>
		description: <?php echo $carObj['description'] ; ?> <br>
		<img  height=300px src="<?php echo $carObj['image'] ; ?> " /><br>
       <?php if(!isset($_SESSION['user_data']['user_type']) && $carObj['status'] != 'reserved'){ ?>
        <form method='post' >
          <input type="hidden" name='id' value ="<?php echo $_GET['id'] ; ?> " />
          <button type='submit'>Reserve</button>
        </form>
    <?php } ?>
