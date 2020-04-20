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