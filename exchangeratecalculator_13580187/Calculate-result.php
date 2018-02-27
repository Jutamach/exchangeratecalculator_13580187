<?php 
	
	//รับค่า
	//ส่งมาแบบ post
	//$thb = $_POST['attribute name']
	$thb = $_POST['thb'];
	$type = $_POST['type'];

	if ($type == "usd") {
		$result = $thb / 31.227;
	}else if ($type == "jyp") {
		$result = $thb / 29.056;
	}else if ($type == "krw") {
		$result = $thb / 0.029;
	}else if ($type == "gbp") {
		$result = $thb / 44.32;
	}else if ($type == "eur") {
		$result = $thb / 38.27;
	}


	//-----------------------

	// if ($type=="usd") {
	// 	$rate = 31.227;
	// }elseif ($type1=="jyp") {
	// 	$rate = 29.056;
	// }elseif ($type1=="krw") {
	// 	$rate = 0.029;
	// }elseif ($type1=="gbp") {
	// 	$rate = 44.32;
	// }elseif ($type1=="eur") {
	// 	$rate = 38.27;
	// }

	// echo "Result = ".$thb/$rate;
	// echo "<br>";

	//-----------------------

	// switch ($type) {
	// 	case 'usd':
	// 		$rate = 31.227;
	// 		break;
	// 	case 'jyp':
	// 		$rate = 29.056;
	// 		break;	
	// 	case 'krw':
	// 		$rate = 0.029;
	// 		break;
	// 	case 'gbp':
	// 		$rate = 44.32;
	// 		break;
	// 	case 'eur':
	// 		$rate = 38.27;
	// 		break;

	// 	default:
	// 		$rate=0;
	// 		break;
	// }

	// echo "Result=".$thb/$rate;
	// echo "<br>";

	//import
	require 'connect.php';
	$sql = "INSERT INTO exch781_history(thb, calculated, currency) VALUES ($thb, $result, '$type')";
	//สั่งให้คิวรี่ลงดาต้าเบส
	$sql_exe = $conn -> query($sql);

	echo "<br>";

 ?>

 <!DOCTYPE html>
 <html>

	 <head>
	 	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 	<title>Result</title>
	 </head>

	 <body>
	 	
	 	<div class="container text-center">
	 		<?php 

		 		echo "ค่าที่กรอกคือ ".$thb;
				echo "<br>";
				echo "สกุลเงินที่ใช้คำนวณ ".$type;
				echo "<br>";

				echo "Result = ".$result;
				echo "<br>";

		 		$sql = "SELECT * FROM exch781_history ORDER BY dateRecord DESC";
		 		$sql_exe = $conn -> query($sql);

	 		?>

		 	<table class="table table-hover table-striped">
		 		
		 		<thead>
		 			<tr>
		 				<th class="text-center" colspan="5">History</th>
		 			</tr>
			 		<tr>
			 			<th>ค่าที่กรอก</th>
			 			<th>สกุลเงินที่ใช้คำนวณ</th>
			 			<th>คำนวณ</th>
			 			<th>เวลาที่คำนวณ</th>
			 			<th>ลบข้อมูล</th>
			 		</tr>
			 		<a href="index.php" class="btn btn-success">Back</a>
			 		<br><br>
		 		</thead>
			 	<?php

			 		while ($row = mysqli_fetch_assoc($sql_exe)) {
			 			// echo $array['field name'];
			 			echo "<tr>
			 					<td>".$row['thb']."</td>
			 					<td>"." exchange to ".$row['currency']."</td>"."
			 					<td>".$row['calculated']."</td>
			 					<td>".$row['dateRecord']."</td>";
			 	?>
			 					<td><a class="btn btn-danger" <?php echo 'href="delete.php?id='.$row['recordID'].'&thb='.$row['thb'].'"' ?>>Delete</a></td>
			 				 </tr>

			 	<?php
			 		
			 		}

			 		$conn->close();
			 	?>
		 	</table>
		</div>
	 </body>
 </html>