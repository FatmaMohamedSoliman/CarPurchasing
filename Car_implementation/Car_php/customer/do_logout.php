<?php
require_once  'model.customer.php';
$customer = new user();
$result =$customer->logout();
header("Location: ../../");
//header("Location: ../home.php");

?>
