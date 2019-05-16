<?php
require_once  'model.customer.php';
$customer = new customer();
$result =$customer->logout();
header("Location: ../../");
//header("Location: ../home.php");

?>
