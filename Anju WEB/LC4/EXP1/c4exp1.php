<?php
$host="localhost";
$user="root";
$pass="";
$db="webmysql";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$name=$_POST['name'];
$age=$_POST['age'];
$grade=$_POST['grade'];

$add="insert into student(name,age,grade) values('$name',$age,'$grade')";
$con=mysqli_connect($host,$user,$pass,$db);


if(!$con)
{
die("connection failed".mysqli_connect_error());
}
echo "connected";
$tab="select * from student";
mysqli_query($con,$add);
//echo "1234";
}
?>
<html>
<head>
<title>student info</title>

</head>
<body>
<h1>Student info</h1>
<table border='1'>
<tr>
<th>Name</th>
<th>Age</th>
<th>Grade</th>
</tr>
<?php
$res = mysqli_query($con,$tab);
echo "done";
while($row=mysqli_fetch_assoc($res)){ ?>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['age']; ?></td>
<td><?php echo $row['grade']; ?></td>
</tr>
<?php } ?>


</table>
</body>
</html>
<?php

mysqli_close("$con"); ?>
