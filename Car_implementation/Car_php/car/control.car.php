
<html>

   <head>
      <title>Cars</title>
   </head>

   <body>
     <table style='width:100%'>
			<thead>
			<tr>
				<th>Model</th>
				<th>Color</th>
				<th>Status</th>
				<th>Price</th>
			<tr>
			<thead>
			<tbody>
			<?php
			require_once  'model.car.php';
			$car = new car();
			$carlist = $car->get_all("","");

			for($i = 0 ; $i < count($carlist); $i++)
			{
				echo "<tr>";
				echo "<td>".$carlist[$i]['model']."</td>";
				echo "<td>".$carlist[$i]['model']."</td>";
				echo "<td>".$carlist[$i]['color']."</td>";
				echo "<td>".$carlist[$i]['status']."</td>";
				echo "<td>".$carlist[$i]['price']."</td>";
				echo "</tr>";
			}
			?>
			</tbody>
		</table>
	</body>
</html>
