<?php
	if ($_SERVER['HTTP_HOST']=='localhost') {
		
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'root';
		$DB_PASS_READER = 'Silpakorn60';
		$DB_NAME = 'db781_exchange';
		//echo "<br>";
		//echo("localhost");
	}else{
		// บน server imsu.com
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580187';
		$DB_PASS_READER = 'ASFeZsdWRT';
		$DB_NAME = 'db13580187';
	}

	// //คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER,$DB_USER_READER,$DB_PASS_READER,$DB_NAME);

	// //ตรวจสอบว่าต่อสำเร็จไหม
	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
	}
	mysqli_set_charset($conn, "utf8");

?>