<?php
require_once  __DIR__.'/../car/model.car.php';
if(!isset($_SESSION['user_data'])){
	   header("Location: .");
}
?>



    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

<style>
.topnav .search-container button:hover {
  background: #ccc;
}

.dropbtn {
  background-color: #696969;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:	#B22222;


}

#myInput {
  border-box: box-sizing;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}

.searchbox {
	border: 1px solid #012D5A;
	float: right;
	height: 45px;
	padding: 10px;
	margin-left:20px;
	width: 450px;
}
.myList2{
 margin-left:350px;
 align:Center;
}
</style>
                      <div class="row">
 <?php

 $car = new car();
 $cond = "";
 //admin case
if(isset($_SESSION['user_data']) && isset($_SESSION['user_data']['user_type'])){
 $cond= "status='reserved'";
}else{
  $cond= "status='reserved' and reservedto = ".$_SESSION['user_data']['id'];
}
 $carlist = $car->get_all($cond,"");

 for($i = 0 ; $i < count($carlist); $i++)
 {
   ?>
                 <div class="col-12 col-sm-6 col-lg-4">
                     <div class="single-features-area mb-50">
                         <img style="max-width: 100%; max-height: 200px ; min-height: 200px ;"" src="<?php echo $carlist[$i]['image']?>" alt="">

                         <div class="feature-content d-flex align-items-center justify-content-between">
                             <div class="feature-title">
                                 <h5><?php echo $carlist[$i]['model']?></h5>
                                 <p><?php echo $carlist[$i]['modelyear']?></p>
 								                 <p>Avaliable Color : <?php echo $carlist[$i]['color']?></p>
 								                 <p>Price : <?php echo $carlist[$i]['price'] ?> LE</p>
 								                 <a href="?content=Car_get_cardetail&id=<?php echo $carlist[$i]['id'] ?>"><p bgcolor="#696969"><u>See More</u><p></a>
<?php
// if(isset($_SESSION['user_data']))
//  {
// 	 if(isset($_SESSION['user_data']['user_type']))
// 	 {
// 	 //check admin usertype in the future if(isset($_SESSION['user_data']['user_type'] == 'admin'))
// 			echo " <a href='?content=Car_do_editcar&id=".$carlist[$i]['id']."' > edit </a>";
// 		}
// 		echo " <a href='?content=Car_get_cardetail&id=".$carlist[$i]['id']."' > details </a>";
//  }
 ?>
                             </div>

                         </div>
                     </div>
                 </div>
 <?php } ?>
</div>
