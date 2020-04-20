<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<form class="form-control" method="post" action="student_attendence(insert).php">
<div class="form-group">

<h5>Teacher Name:</h5>
<select  name="teacher_name" class="form-control" >
<?php

include 'config.php';


$query = "SELECT * FROM `subjects`";

$result = mysqli_query($connection,$query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
  ?>
    	 <option><?php echo $row['teacher_name'];?></option><br>


<?php
}
}
?>
</select></br>
</div>
<h5>Subject:</h5>
<div class="form-group">
	<select class="form-control" name="subject_name">
		<option>c</option>
		<option>c(lab)</option>
		<option>c++</option>
		<option>c++(lab)</option>
		<option>fundamental</option>
		<option>NMST</option>
		<option>java</option>
		<option>java(lab)</option>
		<option>Computer Network</option>
		<option>computer Network(lab)</option>
		<option>Operating system</option>
		<option>Operating system(lab)</option>
		<option>Network oprating system</option>
		<option>Network operating sytem(lab)</option>
	</select>
</div>

<div class="form-group">
	<h5>Student Name:</h5><br><input type="text" class="form-control"  name="student_name">
	
</div>
<h5>Class:</h5>
<div class="form-group">
	<select class="form-control" name="class_name">
		<option>BSC(IT)_1st</option>
		<option>BSC(IT)_2nd</option>
		<option>BSC(IT)_3rd</option>
		<option>BSC(IT)_4th</option>
		<option>BSC(IT)_5th</option>
		<option>BSC(IT)_6th</option>
		<option>BCA_1st</option>
		<option>BCA_2nd</option>
		<option>BCA_3rd</option>
		<option>BCA_4th</option>
		<option>BCA_5th</option>
		<option>BCA_6th</option>
		
	</select>
</div>
<div class="form-group">
	<h5>Student Rollno:</h5><br><input type="text" class="form-control" name="student_rollno">
</div>
<div class="form-group">
	<h5>Attendence:</h5></br>
	Present<input type="radio" name="attendence" value="present">
	Absent<input type="radio" name="attendence" value="Absent">

</div>

<input type="submit" name="submit" value="Submit" class="btn btn-success">

</form>

<body>
</html>