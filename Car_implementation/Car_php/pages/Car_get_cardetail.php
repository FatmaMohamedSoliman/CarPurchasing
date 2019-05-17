<style>
body{
background:white;
background-size:cover;
background-attachment:fixed;
}
.container{
margin:0;
}
.img{
float:left;
width:55%;
overflow:hidden;
}
.detailscontent{
background:gray;
opacity: 0.4;
float:right;
width:40%;
overflow:hidden;
font-family: calibri;
color: white;
}


</style>
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

	<div class="container">

		            <div class="img">
		                <img src="<?php echo $carObj['image'] ; ?>" width="100%" >
		            </div>
				    <div class="detailscontent" style="text-align:center; ;padding-left: 2em;">
							 <h1 style="font-family:verdana;"><?php echo $carObj['model'] ; ?></h1>
						<div style="text-align:left;">

		          <p style="font-size:120%;">Model: <?php echo $carObj['modelyear'] ; ?></p>
							<p style="font-size:120%;">Status: <?php echo $carObj['status'] ; ?></p>
							<?php if($carObj['status'] == 'reserved'){ ?>
								<p style="font-size:120%;">Reservation date: <?php
									echo $carObj['reservationdate'] ;
									?></p>
						  <p style="font-size:120%;">Reservation Expire: <?php
								echo date('Y-m-d',strtotime($carObj['reservationdate']. ' + 1 days')) ;
								?></p>
								<?php } ?>

							<p style="font-size:120%;">Avaliable Color: <?php echo $carObj['color'] ; ?></p>
							<p style="font-size:120%;">Price: <?php echo $carObj['price'] ; ?> LE</p>
							<p style="font-size:110%     max-width: 300px;">
									<?php echo $carObj['description'] ; ?>
							</p>
						</div>

						<?php
						if(!isset($_SESSION['user_data']['user_type']) && $carObj['status'] != 'reserved'){ ?>
			 			<form method='post' >
			 				<input type="hidden" name='id' value ="<?php echo $_GET['id'] ; ?> " />
			 				<button class="btn " type='submit' style=" background-color:#2f3640;color: white;">Reserve</button>
			 			</form>
			 			<?php }
				 			?>
		            </div>



		        </div>
