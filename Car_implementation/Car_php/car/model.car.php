<?php
require_once  __DIR__	.'\..\database.php';
class car{
	private $d = null;
	function __construct(){
		$this->d = new DataBase();
	}

	/**
	@param where_cl string username = 'xyz'
	*/
	function get_all($where_cl = "",$order_cl="")
	{
		$sql_car_data_query = "SELECT `id`, `status`, `description`, `model`, `color`, `price`,`image` FROM `car` ";

		if($where_cl != ""){
			$sql_car_data_query .= " where $where_cl ";
		}

		if($order_cl != ""){
			$sql_car_data_query .= " order by $order_cl ";
		}

		$allucars = $this->d->query($sql_car_data_query);
		return $allucars;
	}
	function addcar( $status, $description , $model, $color, $price ,$img)
	{
		$sql = "INSERT INTO car(`status`, `description`, `model`, `color`, `price`,`image`)
				VALUES ('$status', '$description','$model', '$color' , '$price','$img')";
		$sql_insert_result=$this->d->execute($sql);
		return $sql_insert_result;
	}
	function editcar($status, $description,$model, $color, $price,$img, $id){
		$sql = "UPDATE `car` SET
		`status`='$status',
		`description`='$description',
		`model`='$model',
		`color`='$color',
		`price`='$price',
		`image` = '$img'
		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}

}
?>
