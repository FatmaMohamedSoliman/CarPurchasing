<?php
require_once  'model.customer.php';
$customer = new user();
$customerlist = $customer->get_all("id>2 ","phone ASC");

?>
