<html>
<body>
<center><h2>AREA OF TRIANGLE</h2><br>
<form method="post">
<label for="height">Height:</label>
<input type="no1" name="no1" ><br><br>
<label for="breadth">Breadth:</label>
<input type="number2" name="number2" ><br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
$height=$_POST['no1'];
$breadth=$_POST['number2'];
$area=$height*$breadth/2;
echo "Area:$area";
?>
</center>
</body>
</html>


