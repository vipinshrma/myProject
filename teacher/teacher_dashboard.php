<!DOCTYPE html>
<?php

session_start();
if(!isset($_SESSION['teacher_name'])){
  header("location: teacher.php");
}

?>
<html>
<head>
			<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
    <div class="heading ">
      <h4>Welcome <?php echo $_SESSION['teacher_name']; ?></h4>

    </div>
		<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-5 ">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="student_attendence.php">Student Attendance</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="show_time_table(teacher).php">Time table</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">marksheet</a>
    </li>
    
  </ul>
</nav>

</div>

<a href="teacher_logout.php" class="btn btn-danger" >Logout</a>


</body>
</html>