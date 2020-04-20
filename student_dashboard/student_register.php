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
      STUDENT REGISTER PAGE 
  </div>
  <div class="container row d-flex flex-row justify-content-center">
    <div class="admin-form shadow p-2 mb-5">
      <form action="student_data_insert.php" method="post">
         <div class="form-group">
          <label>Name</label>
          <input type="text" name="name" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Class</label>
          <select class="form-control" name="class_name" >
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
        </div>
      </select>
        <div class="form-group">
          <label class="mt-2">Roll_no</label>
          <input type="text" name="roll_no" value="" class="form-control " autocomplete="off">
        </div>
        <div class="form-group">
          <label>Student ID</label>
          <input type="email" name="email" value="" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="" class="form-control" autocomplete="off">
        </div>
        <input type="submit" name="submit" class="btn btn-success ">
      </form>
    </div>
  </div>
</div>
