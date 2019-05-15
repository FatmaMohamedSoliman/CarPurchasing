<?php
require_once  'car/model.car.php';
?>
<html>
   <head>
      <title>home</title>
   </head>
   <body>
<?php
    if(isset($_SESSION['user_data']))
    {
      echo "Welcome ".  $_SESSION['user_data']['username']. ", <a href='customer/do_logout.php'>logout</a><br>";

      echo "<a href='car/do_addcar.php'>addcar</a><br>";
    }
    else {
    if(isset($_GET['Message']))
    echo $_GET['Message'];

    ?>

       <form method='post' action = "customer/do_login.php">
    		username <input type='text' name='username' /><br>
    		password <input type='password' name='password' /><br>
    		<button type='submit'>save</button>
       </form>

    <?php
    }

?>
<table style='width:70%'>
 <thead>
 <tr>
   <th>model</th>
   <th>image</th>
   <th>color</th>
   <th>status</th>
    <th>price</th>
    <th>operation</th>
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
   echo "<td>
             <a href='car/do_editcar.php?id=".$carlist[$i]['id']."' > edit </a>
             <a href='car\get_cardetail.php?id=".$carlist[$i]['id']."' > details </a>
          </td>";
   echo "</tr>";
 }
 ?>
 </tbody>
</table>
</body>
</html>
