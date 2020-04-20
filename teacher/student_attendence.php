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
      <form action="student_attendence(insert).php" method="post">
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
            <?php
            include('conn.php');

            $query = "SELECT  `tt_id` ,`class1` FROM `time_table`";

            $result = mysqli_query($conn,$query);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)){
                  ?>
                   <option><?php echo @$row[class1]; ?> </option>
            <?php
            }
            }
            ?>
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

</body>
</html>