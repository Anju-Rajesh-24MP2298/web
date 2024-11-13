<html>
	<head>
		<title>Divisibility Check</title>
	</head>
	<body>
		<center><h2>Divisibility Check</h2><br>
		<form method="post">
			<label for="number">Enter Number :</label>
			<input type="number" id="number" name="number" required><br><br>
			<label for="divisor">Enter Divisor :</label>
			<input type="number" id="divisor" name="divisor" required><br><br>
			<input type="submit" value="Check">
		</form>
		<?php
			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$num = $_POST['number'];
				$divisor = $_POST['divisor'];
				
				if ($divisor != 0) {
					if ($num % $divisor == 0) {
						echo "<h3>$num is divisible by $divisor</h3>";
					} else {
						echo "<h3>$num is not divisible by $divisor</h3>";
					}
				} else {
					echo "<h3>Divisor cannot be zero.</h3>";
				}
			}
		?>
		</center>
	</body>
</html>

