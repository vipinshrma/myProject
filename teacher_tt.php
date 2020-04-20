<?php
include('conn.php');

$query = "SELECT  `tt_id` ,`class1` FROM `time_table`";

$result = mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!-- 
<script type="text/javascript">
	document.getElementById('yourbox').onChange=function(){
		document.getElementById('yourtext').disabled= !this.checked;
		
	};
</script> -->
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<form class="form-control" method="post" action="addtt.php">
<h5>Select the class:</h5></br>
<div>
<select class="form-control" name="class1" >
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)){
    	?>
    	 <option value="<?php echo @$row['tt_id']; ?>"><?php echo @$row[class1]; ?> </option>
<?php
}
}
?>
</select></br>
<h4>Select the timing:</h4>
<!-- 9:45 AM<input type="checkbox" name="checkbox"  value="9:45"> 
10:15 AM<input type="checkbox" name="checkbox" value="10:15">  -->
<!-- <input type="checkbox" name="checkbox" id="yourbox">
<input type="text" name="slot2" id="slot2"> -->
<!-- 11:15 <input type="checkbox" name="timing" value="11:15">
12:00 <input type="checkbox" name="timing" value="12:00">
12:45 <input type="checkbox" name="timing" value="12:45">
1:30 <input type="checkbox" name="timing" value="1:30">
2:15 <input type="checkbox" name="timing" value="2:15">
3:00 <input type="checkbox" name="timing" value="3:00"></br></br>
 -->

<h4>Slot 1 Subject:</h4> <input type="text"  class="form-control"  name="subject_name1"></br>
<h4>Slot 2 Subject:</h4> <input type="text"  class="form-control"  name="subject_name2"></br>
<h4>Slot 3 Subject:</h4> <input type="text"  class="form-control"  name="subject_name3"></br>
<h4>Slot 4 Subject:</h4> <input type="text"  class="form-control"  name="subject_name4"></br>
<h4>Slot 5 Subject:</h4> <input type="text"  class="form-control"  name="subject_name5"></br>


<input type="submit" name="submit" value="Submit" class="btn btn-success">

<a class="btn btn-danger text-center  ml-5" href="">Logout</a>
</div>
</form>
</body>
</html>




