<?php
require_once  __DIR__.'/../Car_php/database.php';
// require_once  __DIR__.'/../database.php';

    if(isset($_SESSION['user_data']))
    {
?>
<form class="form-inline" action="/action_page.php">
  <?php   echo "Welcome ".  $_SESSION['user_data']['username'].", "; ?>
   <button onclick="window.location='?content=Car_userprofile'" type="button" class="btn btn-default" name="profile-btn" style="margin-right:5px; background-color:#2f3640;color: white;">My Profile</button>
   <button onclick="window.location='Car_php/customer/do_logout.php'" type="button" class="btn btn-default" name="logout-btn" style=" background-color:#2f3640;color: white;">Logout</button>
</form>
<?php
	//header("Location: ../home.php");11111111111111111111111111111111
    }
    else {

    if(isset($_GET['Message']))
    echo $_GET['Message'];

    ?>
<form class="form-inline" action="Car_php/customer/do_login.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
     <button type="submit" class="btn btn-default" name="login-btn" style="margin-right:5px; background-color:#2f3640;color: white;">Login</button>
	   <button type="button"  onclick="window.location='?content=Car_Registeration'" class="btn btn-default" name="register-btn" style="margin-right:5px; background-color:#2f3640;color: white;">Register</a>
</form>

<?php } ?>
