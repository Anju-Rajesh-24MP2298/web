<?php
	function getGrade($marks){
		if($marks >= 60) {
			return "First Division";
		} elseif($marks >= 45 && $marks < 60) {
			return "Second Division";
		} elseif($marks >= 33 && $marks < 45) {
			return "Third Division";	
		} else {
			return "Fail";
		}
	}
	// Check if the form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$mark = $_POST['mark'];
	$grade = getGrade($mark);
	echo "<br>Student Grade: " . $grade;
	}		
?>

