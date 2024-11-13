<html>
	<head>
		<title>Factorial</title>
	</head>
	<body>
		<center><h2>FACTORIAL</h2><br>
		<form method="post">
			<label for="number">Enter Number :</label>
			<input type="number" id="number" name="number" required><br><br>
			<input type="submit" value="Calculate Factorial">
		</form>

		<?php
			function factorial($number){
				$fact=1;
				for($i=1;$i<=$number;$i++)
				{
					$fact*=$i;
				}	
				return $fact;
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$number = $_POST['number'];
				$fact = factorial($number);
				echo "<br><br>Factorial of number $number is : $fact";
			}		
		?>
		</center>
	</body>
</html>

