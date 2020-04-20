<!-- <?php
$id //= $_GET['id'];

?> -->

<!DOCTYPE html>

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
        ATTENDENCE PAGE 
  </div>
  <div class="container row d-flex flex-row justify-content-center">
    <div class="admin-form shadow p-2 mb-5">
      <form action="update_attendence.php" method="post">
        <div class="form-group">
          <label>Teacher Name</label>
          <input type="text" name="teacher_name" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Subject</label>
          <input type="text" name="subject" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Student_name</label>
          <input type="text" name="student_name" value="" class="form-control" autocomplete="off">
        </div>
         <div class="form-group">
          <label>Class</label>
          <select class="form-control" name="class" >
           
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
          <label>Roll NO</label>
           <input type="text" name="roll_no" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Attendence:</label><br>
          Present<input type="radio" name="attendence" value="present">
          Absent<input type="radio" name="attendence" value="Absent">
        </div>
        <input type="submit" name="submit" class="btn btn-success ">
        
      </form>
    </div>
  </div>
</div>

<?php

 include 'conn.php';

if(isset($_POST['submit'])){
  $id=$_GET['id'];
  $teacher=$_POST['teacher_name'];
  $subject=$_POST['subject'];
  $student=$_POST['student_name'];
  $class=$_POST['class'];
  $roll_no=$_POST['roll_no'];
  $attendence=$_POST['attendence'];

  // $query2 = "UPDATE `attendence` SET `teacher_name`=$teacher,`subject`=$subject,`student_name`=$student,`class_name`=$class,`roll_no`=$roll_no,`attendence`=$attendence WHERE `id`=$id";

  $query2= " UPDATE attendence SET teacher_name='$teacher',subject='$subject',student_name='$student',class_name='$class',roll_no='$roll_no',attendence='$attendence' WHERE id=$id";


  $res =mysqli_query($conn,$query2);
   if($res){
    header('location: show_attendence(admin).php');
    }
  // else{
  //   header('location: admin.php');
  // }

}

?>





</body>
</html>

