<?php
require_once  __DIR__.'/../car/model.car.php';
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
<script>
function search()
{
  window.location='?color='+$('#color').val()+'&order=price&sort='+$('#order').val();
   // +'?model='+$('#model').val();
}
 </script>


    <section class="dorne-listing-destinations-area">
	<div class="container">

                <div class="col-12 mb-50">


             <label>Select color</label>
             <select  onchange="search()"  width="100%" height="45px" id=color >
               <option <?php echo (isset($_GET['color']) && $_GET['color']=='Red')? ' selected ': ""   ?> >Red</option>
               <option <?php echo (isset($_GET['color']) && $_GET['color']=='Gray')? ' selected ': ""   ?> >Gray</option>
               <option <?php echo (isset($_GET['color']) && $_GET['color']=='Blue')? ' selected ': ""   ?> >Blue</option>
               <option  <?php echo (isset($_GET['color']) && $_GET['color']=='Black')? ' selected ': ""   ?>>Black</option>
			         <option <?php echo (isset($_GET['color']) && $_GET['color']=='Green')? ' selected ': ""   ?> >Green</option>
             </select>
			 <span style="word-spacing: 30px;"></span>
			 <label>Select Price</label>
             <select id=order onchange="search()" >
               <option value="desc" <?php echo (isset($_GET['sort']) && $_GET['sort']=='desc')? ' selected ': ""   ?> >High To Low</option>
               <option value = "asc" <?php echo (isset($_GET['sort']) && $_GET['sort']=='asc')? ' selected ': ""   ?>>Low To High</option>

             </select>

             <!-- <input class="searchbox" type="text" Placeholder="Search........" name="search" align="right" maxlength="35"> -->





</div>

</div>

                      <div class="row">
<?php
$car = new car();
$cond = "";
$order = "";
if(isset($_GET['order'])){
  $order = $_GET['order']. ' '. $_GET['sort'];
  $cond = "color='".$_GET['color']."'";
}
$carlist = $car->get_all($cond,$order);





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
								                 <a href="Car_php/car/do_deletecar.php?id=<?php echo $carlist[$i]['id'] ?>"><p bgcolor="#696969"><u>DeleteCar</u><p></a>

                            </div>

                        </div>
                    </div>
                </div>
<?php } ?>

            </div>
        </div>
    </section>
