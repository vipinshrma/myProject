<!DOCTYPE html>
<?php 
// session_start();
// if(!isset($_SESSION['name']))
// {
//   header('location: student_login.php');
// }


 ?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="/practice_php/style.css"> 
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container center-div shadow ">
    <div class="heading text-center mb-5 text-uppercase text-white "> 
      STUDENT LOGIN PAGE 
  </div>
  <div class="container row d-flex flex-row justify-content-center">

    <div class="admin-form shadow p-2 mb-5">
      <form action="student_login.php" method="post">
        <div class="form-group">
          <label>STUDENT ID</label>
          <input type="text" name="email" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="" class="form-control" autocomplete="off">
        </div>
        <input type="submit" name="submit" class="btn btn-success ">
        <a style="float: right"  href="student_register.php" class="btn btn-secondary">Register</a>
      </form>

    </div>
  </div>
  

 </div>

 <?php
 session_start();

if(isset($_POST["submit"])){
  
  include 'conn.php';

  $email=$_POST['email'];
  $password=$_POST['password'];

   $query="SELECT * FROM `student` WHERE `email_id`='$email' AND `password`='$password'";
   // $query = "select * from student where email_id = '$email' and password = '$password' ";

  $result=mysqli_query($conn,$query);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
      $_SESSION['name']=$row['name'];
      $_SESSION['class']=$row['class_name'];
      $_SESSION['roll_no']=$row['roll_no'];
      header('location: student_dashboard.php');
    }
  }
    else{
      echo "error";

    }
  }


?>



</body>


</html>