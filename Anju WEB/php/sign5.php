<html>
	<head>
		<title>Number Sign</title>
	</head>
	<body>
		<center><h2>Number Sign</h2><br>
		<form method="post">
			<label for="number">Enter Number :</label>
			<input type="number" id="number" name="number" required><br><br>
			<input type="submit" value="Check">
		</form>

		<?php
			function sign($number){
				if($number < 0){
					return "The number is negative";
				} elseif($number > 0) {
					return "The number is positive";				
				} else {
					return "The number is zero";
				}
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$number = $_POST['number'];
				$sign = sign($number);
				echo $sign;
			}		
		?>
	</center>
	</body>
</html>

