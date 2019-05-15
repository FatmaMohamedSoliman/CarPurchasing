<?php
require_once  __DIR__.'/../Car_php/database.php';
// require_once  __DIR__.'/../database.php';

    if(isset($_SESSION['user_data']))
    {
      echo "Welcome ".  $_SESSION['user_data']['username'].",";
      echo "<a class='btn btn-default' style='margin-right:5px; margin-left:5px;' href='Car_php/customer/do_logout.php'>Logout</a><br>";

	//header("Location: ../home.php");
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
     <button type="submit" class="btn btn-default" name="login-btn" style="margin-right:5px; margin-left:5px;">Login</button>
	   <button type="submit" class="btn btn-default" name="register-btn">Register</button>
</form>

<?php } ?>
