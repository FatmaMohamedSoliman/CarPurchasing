<style>
header{

}
ul {
 font-family: cursive;
 list-style-type: none; /*To remove the bullets*/
 margin: 0; /*To suit the 30% of frame size*/
 overflow: hidden;
 background-color: #2f3640;
}

li {
 float: left; <!--Horizontal list-->
}

li a {
 display: block; /*to display it in a block*/
 color: white;
 text-align: center;
 padding: 16px;
 text-decoration: none;
}

li a:hover {
 background-color: #FD3838;
color: white;
text-decoration: none;
}
</style>
<ul>
       <li><a href="?content=Car_home">Home</a></li>
       <li><a href="?content=Car_aboutus">About us</a></li>
        <?php if(isset($_SESSION['user_data'])){ ?>
                 <?php if(!isset($_SESSION['user_data']['user_type'])){ ?>

                 <li><a href="?content=Car_reservedcars">Reserved Cars</a></li>
                 <li><a href='?content=Car_do_addcar'>Sell Car</a></li>
                  <li><a href='?content=car_addedcars'>Added Car</a></li>
               <?php } else { ?>
                 <li><a href="?content=Car_reservedcars">All reservation</a></li>
                  <li><a href="?content=Car_allcars">All cars</a></li>
                  <li><a href="?content=Car_allusers">All users</a></li>
                 <li><a href='?content=Car_do_addcar'>Add Car</a></li>
                  <li><a href='?content=Car_Registeration'>Add user</a></li>

                      <li><a href='?content=Car_deletecar'></a></li>
                 <?php }?>
        <?php }?>
  </ul>
