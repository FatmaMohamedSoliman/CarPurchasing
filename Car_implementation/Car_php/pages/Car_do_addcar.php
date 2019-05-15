<?php
if(isset($_POST['model'])){
	require_once  __DIR__.'/../car/model.car.php';
	$car = new car();
	//example of registrtion
	$status =$_POST['status'];
	$model=$_POST['model'];
	$description=$_POST['description'];
	$color=$_POST['color'];
	$price=$_POST['price'];
	$img=$_POST['img'];
	$result= $car->addcar( $status, $description , $model, $color, $price,$img );
	if($result){
		header("Location: .");
	}
}
?>

   <form method='post'>
	 <input type='hidden' name='status' value="free" /><br>
		model:
					<select type='number' name='model' >
							<option> VM </option>
							<option> BMW </option>
					</select>
					<br>
		color: <select type='number' name='color' >
							<option> red</option>
							<option> blue </option>
							<option> black </option>
					</select><br>
		price: <input type='number' name='price' /><br>
		description <input type='text' name='description' /><br>
		image <input type='url' name='img' /><br>
		<button type='submit'>save</button>
   </form>
