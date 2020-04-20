<?php  

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$db_name = "attendance_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $db_name);


if(isset($_POST['submit'])){

$student_name = $_POST['name'];
$class = $_POST['class_name'];
$roll_no = $_POST['roll_no'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO student(name,class_name,roll_no,email_id,password) VALUES('$student_name','$class','$roll_no','$email','$password')";

$result =mysqli_query($conn,$query);

if($result){
	header("location:student_login.php");
	$_SESSION['student_name']= $student_name;
}else{
	echo "something is wrong";
	echo $query;
}

}



?>