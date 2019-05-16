<?php
require_once  __DIR__.'/../car/model.car.php';
$car = new car();
//to handle the save operation
if(isset($_POST['id'])){
   $status =$_POST['status'];
   $description=$_POST['description'];
   $model=$_POST['model'];
   $color=$_POST['color'];
   $price=$_POST['price'];
    $id=$_POST['id'];
    $img = $_POST['img'];
    $result= $car->editcar( $status, $description,$model, $color , $price,$img ,$id );
    if($result){
  		header("Location: .");
  	}
}
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
   <form method='post'>
     <input type="hidden" name='id' value ="<?php echo $_GET['id'] ; ?> " />
	status:
  <select name='status' value ="<?php echo $carObj['status'] ; ?> " >
    <option>free</option>
    <option>reserved</option>
    <option>bought</option>
  </select>
  <br>
		model:
					<select  name='model' value ="<?php echo $carObj['model'] ; ?> ">
							<option> VM </option>
							<option> BMW </option>
					</select>
					<br>
		color: <select name='color' value ="<?php echo $carObj['color'] ; ?> " >
      <option >Red</option>
      <option >Gray</option>
      <option >Blue</option>
      <option >Black</option>
      <option >Green</option>
					</select><br>
		price: <input name='price' value ="<?php echo $carObj['price'] ; ?> " /><br>
		description <input type='text' name='description' value ="<?php echo $carObj['description'] ; ?> " /><br>
		image <input type='text' name='img' value ="<?php echo $carObj['image'] ; ?> " /><br>
		<button type='submit'>save</button>
   </form>
   </body>
</html>
