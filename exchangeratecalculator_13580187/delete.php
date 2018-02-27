<?php
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];

	require 'connect.php';

	$sql = "DELETE FROM exch781_history WHERE recordID = $id";

	$sql_exe = $conn -> query($sql);

	$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container text-center">
		<?php
			if ($sql_exe) {     	?>

			<h2 class='text-success'>Delete Complete! <br><small>Delete ID : <?php echo $id ?><br> THB = <?php echo $thb ?></small></h2>

			<a href="index.php" class="btn btn-success">Back</a>
			
			<?php }else{?>

			<h1 class="text-danger">Delete Failed!</h1>

			<?php }	
		?>
	</div>	

</body>
</html>