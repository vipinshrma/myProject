<?php

include 'conn.php';
session_start();

$class_name= $_SESSION['class_name'];
$name =$_SESSION['name'];
$roll_no =$_SESSION['roll_no'];

$query = "SELECT * FROM `attendence` WHERE `roll_no`= '$roll_no'";

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Attendence</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><?php echo strtoupper($name); ?> Attendence</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Teacher</th>
        <th>Subject</th>
        <th>Student</th>
        <th>Class</th>
        <th>Roll No</th>
        <th>Attendence</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if(mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)){
    	?>
    	<tr>
        <td><?php echo $row['teacher_name'] ?></td>
        <td><?php echo $row['subject'] ?></td>
        <td><?php echo $row['student_name'] ?></td>
        <td><?php echo $row['class_name'] ?></td>
        <td><?php echo $row['roll_no'] ?></td>
        <td><?php echo $row['attendence'] ?></td>
      </tr>
      <?php
}
}
else{
	echo "error in showing time table";

}

?>
  </tbody>
  </table>
</div>

</body>
</html>
