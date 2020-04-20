<?php  

include 'conn.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO admin(user_name,email,password) VALUES('$name','$email','$password')";

$result =mysqli_query($conn,$query);

if($result){
	header("location:admin.php");
}else{
	echo "something is wrong";
}

}



?>