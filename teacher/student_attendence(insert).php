<?php 

include 'conn.php';

if(isset ($_POST['submit'])) {
$teacher_name= $_POST['teacher_name'];
$subject = $_POST['subject'];
$student = $_POST['student_name'];
$class=$_POST['class'];
$roll_no=$_POST['roll_no'];
$attendence=$_POST['attendence'];


$query ="INSERT INTO `attendence`(`teacher_name`, `subject`, `student_name`, `class_name`, `roll_no`, `attendence`) VALUES ('$teacher_name','$subject','$student','$class','$roll_no','$attendence')";

$result = mysqli_query($conn,$query);

if($result){
	header("location:student_attendence.php");
}else {
	echo "something is wrong";
	echo $query;
}

}







 ?>
