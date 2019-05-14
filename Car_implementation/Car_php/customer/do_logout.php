<?php
require_once  'model.customer.php';
$customer = new customer();
$result =$customer->logout();
header("Location: ../home.php");
?>
