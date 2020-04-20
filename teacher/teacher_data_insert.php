<?php  

include 'conn.php';

if(isset($_POST['submit'])){

$teacher_name = $_POST['teacher'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO teacher(teacher_name,email,password) VALUES('$teacher_name','$email','$password')";

$result =mysqli_query($conn,$query);

if($result){
	header("location:teacher.php");
}else{
	echo "something is wrong";
}

}



?>