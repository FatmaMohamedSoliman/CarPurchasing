<?php
if(!isset($_GET['content'])){
  $_GET['content'] = 'car_home';
}





require_once "Car_header/header.php";
require_once "Car_php/pages/".$_GET['content'].".php";
require_once "Car_footer/footer.php";
 ?>
