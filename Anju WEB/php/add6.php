<html>
	<head>
		<title>Add</title>
	</head>
	<body>
		<center><h2>ADD</h2><br>
		<form method="post">
			<label for="number1">Enter First Number :</label>
			<input type="number" id="number1" name="number1" required><br><br>
			<label for="number2">Enter First Number :</label>
			<input type="number" id="number2" name="number2" required><br><br>
			<input type="submit" value="ADD">
		</form>

		<?php
			function add($num1,$num2){
				$sum=$num1+$num2;
				return $sum;
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$num1 = $_POST['number1'];
				$num2 = $_POST['number2'];
				$sum = add($num1,$num2);
				echo "<br><br>The sum of $num1 and $num2 is : $sum";
			}	
		?>
		</center>
	</body>
</html>

