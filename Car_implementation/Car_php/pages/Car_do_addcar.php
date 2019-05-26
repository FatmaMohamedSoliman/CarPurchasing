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
	$modelyear=$_POST['modelyear'];
	$result= $car->addcar( $status, $description , $model, $color, $price,$img,$modelyear );
	if($result){
		header("Location: .");
	}
}
?>
<link rel="stylesheet" type="text/css" media="screen" href="css/stylesheet.css" />
<style>
.form{
background-color: #2f3640;
align: center;
margin-left: 25%;
	margin-right:25%;
	width: 50%;
}
</style>
<form method="POST" id="form" class="form" autocomplete="off"  >
					<span class="form-title">Enter All Car Information</span>
<<input type="hidden" name='status' value='free'/>
					<div class="wrap-input">
							<span class="span-user-name title">Car Type</span>

							<select type='number' name='model' required style="width: 90%;">
									<option> VM </option>
									<option> BMW </option>
										<option> VERNNA </option>
										<option> FIAT </option>
										<option> KIA </option>
							</select>
					</div>
					<div class="wrap-input">
							<span class="span-email title">Car Model</span>
							<input type="text" name='modelyear' placeholder="Please enter the car model" class="txt-input"  required maxlength="30"/>
					</div>
		<div class="wrap-input">
							<span class="span-Address-name title">Car Color</span>

							<select type='number' name='color' required  style="width: 90%;">
								<option >Red</option>
								<option >Gray</option>
								<option >Blue</option>
								<option >Black</option>
								<option >Green</option>
										</select>
					</div>
		<div class="wrap-input">
							<span class="span-Address-name title">Car Price</span>
							<input type="number" name = 'price' placeholder="Please enter the car price" class="txt-input" title="Ten digits code" required maxlength="1000">
					</div>
		<div class="wrap-input">
							<span class="span-Address-name title">Car Description</span>
							<input type="text" name='description' placeholder="Please enter the car description" class="txt-input" title="Ten digits code" required maxlength="1000">
					</div>
					<div class="wrap-input">
										<span class="span-Address-name title">Car Image</span>
										<input type="url"  name='img' placeholder="Please enter the car image url" class="txt-input" title="Ten digits code" required maxlength="1000">
								</div>
		<div id="error-nwl"></div>



							<input type="submit" value="Add Car" id="login" class="login txt-input btn btn--dark  btn--rounded btn--transparent btn--move">

			</form>
