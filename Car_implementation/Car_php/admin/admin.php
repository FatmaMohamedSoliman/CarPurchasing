<?php
require_once  __DIR__	.'\..\database.php';
class admin
{



  function get_all($where_cl = "",$order_cl="")
  {
    $sql_customer_data_query = "select `id`, `username`, `phone`, `email`, `address`  FROM `customer`";

    if($where_cl != ""){
      $sql_customer_data_query .= " where $where_cl ";
    }

    if($order_cl != ""){
      $sql_customer_data_query .= " order by $order_cl ";
    }

    $allucustomers = $this->d->query($sql_customer_data_query);
    return $allucustomers;
  }
function deletecar()
{

}
}
?>
