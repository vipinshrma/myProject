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
      TEACHER REGISTER PAGE 
  </div>
  <div class="container row d-flex flex-row justify-content-center">
    <div class="admin-form shadow p-2 mb-5">
      <form action="teacher_data_insert.php" method="post">
         <div class="form-group">
          <label>Teacher Name</label>
          <input type="text" name="teacher" value="" class="form-control" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>TEACHER ID</label>
          <input type="email" name="email" value="" class="form-control" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password" value="" class="form-control" autocomplete="off" required>
        </div>
        <input type="submit" name="submit" class="btn btn-success ">
      </form>
    </div>
  </div>
</div>
