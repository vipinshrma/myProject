<?php

include 'conn.php';

$query = "SELECT * FROM `time_table`";

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Time Table</h2>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>class</th>
        <th>9:45 AM</th>
        <th>10:30 AM</th>
        <th>11:15 AM</th>
        <th>12:00 PM</th>
        <th>12:45 PM</th>
        <th>1:30 PM</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	if(mysqli_num_rows($result) > 0) {
   
    while($row = mysqli_fetch_assoc($result)){
    	?>
    	<tr>
        <td><?php echo $row['class1'] ?></td>
        <td><?php echo $row['slot_1'] ?></td>
        <td><?php echo $row['slot_2'] ?></td>
        <td><?php echo $row['slot_3'] ?></td>
        <td><?php echo $row['slot_4'] ?></td>
        <td><?php echo $row['slot_5'] ?></td>
        <td><?php echo $row['slot_6'] ?></td>
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
