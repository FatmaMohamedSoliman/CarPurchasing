<?php

require_once  __DIR__.'/../car/model.car.php';
 $car = new car();
if(isset($_POST['free'])){
   $car->freeExpiredReservtion();
}
?>



<table width=100% class="table table-bordered">
 <thead>
 <tr>
   <th>model</th>
   <th>image</th>
   <th>color</th>
   <th>status</th>
    <th>price</th>
    <?php if(isset($_SESSION['user_data'])){ ?>
        <th>
          <?php
        if(isset($_SESSION['user_data']['user_type'])){ ?>
        <form method='post' >
          <input type="hidden" name='free' value ="1" />
          <button class="btn btn-danger" type='submit' style=" color: white;">Free Expired Reservtion</button>
        </form>
        <?php }
          ?>
        </th>
    <?php } ?>
 <tr>
 <thead>
 <tbody>

 <?php
 $carlist = $car->get_all("","");

 for($i = 0 ; $i < count($carlist); $i++)
 {
   echo "<tr>";
   echo "<td>".$carlist[$i]['model']."</td>";
   echo "<td><img width=170px hight=170px src='".$carlist[$i]['image']."'></td>";
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
