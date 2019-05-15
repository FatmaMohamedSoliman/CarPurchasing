<?php
require_once  'model.car.php';
$car = new car();

//to handle the view default vlaue for editing operation
$carObj = null;
if(isset($_GET['id'])){
  $carlist = $car->get_all("id = ".$_GET['id'],"");
  $carObj = $carlist[0];
}
?>
<html>
   <head>
      <title>edit Cars</title>
   </head>
   <body>


	status:<?php echo $carObj['status'] ; ?><br>
		model: <?php echo $carObj['model'] ; ?> <br>
		color: <?php echo $carObj['color'] ; ?> <br>
		price: <?php echo $carObj['price'] ; ?><br>
		description: <?php echo $carObj['description'] ; ?> <br>
		<img  height=300px src="<?php echo $carObj['image'] ; ?> " /><br>
	 </body>
</html>
