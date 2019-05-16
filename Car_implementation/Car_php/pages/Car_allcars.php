<?php
require_once  __DIR__.'/../car/model.car.php';
?>

<table style='width:70%'>
 <thead>
 <tr>
   <th>model</th>
   <th>image</th>
   <th>color</th>
   <th>status</th>
    <th>price</th>
    <?php if(isset($_SESSION['user_data'])){ ?>
        <th>operation</th>
    <?php } ?>
 <tr>
 <thead>
 <tbody>
 <?php

 $car = new car();
 $carlist = $car->get_all("","");

 for($i = 0 ; $i < count($carlist); $i++)
 {
   echo "<tr>";
   echo "<td>".$carlist[$i]['model']."</td>";
   echo "<td><img width=70px hight=70px src='".$carlist[$i]['image']."'></td>";
   echo "<td>".$carlist[$i]['color']."</td>";
   echo "<td>".$carlist[$i]['status']."</td>";
   echo "<td>".$carlist[$i]['price']."</td>";
   echo "<td>";
         if(isset($_SESSION['user_data']))
         {
           if(isset($_SESSION['user_data']['user_type']))
           {
           //check admin usertype in the future if(isset($_SESSION['user_data']['user_type'] == 'admin'))
              echo " <a href='?content=Car_do_editcar&id=".$carlist[$i]['id']."' > edit </a>";
            }
            echo " <a href='?content=Car_get_cardetail&id=".$carlist[$i]['id']."' > details </a>";
         }
   echo "</td>";
   echo "</tr>";
 }
 ?>
 </tbody>
</table>
