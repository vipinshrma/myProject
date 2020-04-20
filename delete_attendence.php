<?php
include 'conn.php';

$id = $_GET['id'];



$query = "DELETE FROM `attendence` WHERE `id`='$id'";

$result = mysqli_query($conn,$query);

if($result){
	header('location: show_attendence(admin).php');

}else{
	echo "something wrong";
}


?>