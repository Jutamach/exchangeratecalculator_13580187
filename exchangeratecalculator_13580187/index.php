<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  	<link rel="stylesheet" href="dist/css/bootstrap-select.css">
  	<link rel="stylesheet" href="css/style.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  	<script src="dist/js/bootstrap-select.js"></script>
</head>
<body>
	<br><br><br><br>
	<div class="container">
	<form class="cov-frm" name="frm" action="Calculate-result.php" method="post" onsubmit="return myFunction()">
		<h1>เครื่องคำนวณอัตราแลกเปลี่ยน</h1><br>
		<!-- <label>กรุณาระบุจำนวนเงินที่ท่านต้องการแลกเปลี่ยน </label><br> -->
		<!-- <input type="text" class="form-control" name="thb"><br> -->

		<div class="form-group">
		  <label>กรุณาระบุจำนวนเงินที่ท่านต้องการแลกเปลี่ยน</label>
		  <input id="innumb" class="form-control" type="number" name="thb" required>
		  <p class="text-danger" id="demo"></p>
		</div>
		
		<label>กรุณาเลือกสกุลเงินที่ท่านมี</label>
		<select class="selectpicker form-control">
			<option value="thb" data-icon="thb" >THB</option>                 
		</select>
		<br><br>

		<label>กรุณาเลือกสกุลเงินที่ท่านต้องการ</label>
		<select class="selectpicker form-control" name="type">
			<option value="usd" data-icon="usd" >USD</option>
			<option value="jyp" data-icon="jyp" >JYP</option>
			<option value="krw" data-icon="krw" >KRW</option>
			<option value="gbp" data-icon="gbp" >GBP</option>
			<option value="eur" data-icon="eur" >EUR</option>                    
		</select>


		<br><br><br>
		<button type="submit" class="btn btn-primary btn-lg btn-block">Calculate</button>
		<br><br>

	</form>
	</div>

	<script>
	  $(document).ready(function () {
	    var mySelect = $('#first-disabled2');

	    $('#special').on('click', function () {
	      mySelect.find('option:selected').prop('disabled', true);
	      mySelect.selectpicker('refresh');
	    });

	    $('#special2').on('click', function () {
	      mySelect.find('option:disabled').prop('disabled', false);
	      mySelect.selectpicker('refresh');
	    });

	    $('#basic2').selectpicker({
	      liveSearch: true,
	      maxOptions: 1
	    });
	  });

		function myFunction() {
	    var x, text;

	    // Get the value of the input field with id="numb"
	    x = document.forms["frm"]["thb"].value;

	    // If x is Not a Number or less than one or greater than 10
	    if (x <= 0) {
	        text = "กรุณาใส่ตัวเลขที่ไม่ติดลบ";     
	        document.getElementById("demo").innerHTML = text;
	        return false;
	    }    
	}
	</script>

</body>
</html>