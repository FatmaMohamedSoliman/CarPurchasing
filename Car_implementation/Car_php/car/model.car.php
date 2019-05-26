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
		$sql_car_data_query = "SELECT car.`id`,users.username, `status`, `description`, `model`, `color`, `price`,`image`,`reservationdate` ,`modelyear`
		FROM `car`
    left outer join users on car.reservedto =users.id" ;
		if($where_cl != ""){
			$sql_car_data_query .= " where $where_cl ";
		}

		if($order_cl != ""){
			$sql_car_data_query .= " order by $order_cl ";
		}
		// echo $sql_car_data_query;
		$allucars = $this->d->query($sql_car_data_query);
		return $allucars;
	}
	function addcar( $status, $description , $model, $color, $price ,$img,$modelyear)
	{




		$sql = "INSERT INTO car(`status`, `description`, `model`, `color`, `price`,`image`,`modelyear`,`addedby`)
	VALUES ('$status', '$description','$model', '$color' , '$price','$img','$modelyear',".$_SESSION['user_data']['id'].")";
		$sql_insert_result=$this->d->execute($sql);
		return $sql_insert_result;
	}
	function editcar($status, $description,$model, $color, $price,$img, $id,$modelyear){
		$sql = "UPDATE `car` SET
		`status`='$status',
		`description`='$description',
		`model`='$model',
		`color`='$color',
		`price`='$price',
		`image` = '$img',
	  `modelyear`=	$modelyear
		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}

	function reserve($customer, $id){
		$sql = "UPDATE `car` SET
		`status`='reserved',
		`reservedto`=$customer,
		`reservationdate`='".date('Y-m-d H:i:s')."'
		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}
	function changestatus($status, $id){
		$sql = "UPDATE `car` SET
		`status`='$status'
		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}
	function freeExpiredReservtion(){
		$sql = "UPDATE `car` SET
		`status`='free',
			`reservationdate`=NULL,
				`reservedto`=NULL
		-- //date(YYYY-MM-DD,[timestamp]);
  	WHERE `status`= 'reserved' and  DATE_ADD(reservationdate, INTERVAL 1 DAY) <=now();";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}
	function delete_car( $id){
		$sql = "delete from `car`
		WHERE id= $id";
		$sql_update_result=$this->d->execute($sql);
		return $sql_update_result;
	}

}
?>
