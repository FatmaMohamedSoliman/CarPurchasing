<?php
require_once  'model.customer.php';
$customer = new customer();
$customerlist = $customer->get_all("id>2 ","phone ASC");

?>