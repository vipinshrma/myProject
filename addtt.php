<?php

 include('conn.php');

if(isset($_POST['submit'])){
	$class1=$_POST['class1'];
	//$timing = $_POST['timing'];
	$subject_1 = $_POST['subject_name1'];
	$subject_2= $_POST['subject_name2'];
	$subject_3 = $_POST['subject_name3'];
	$subject_4 = $_POST['subject_name4'];
	$subject_5 = $_POST['subject_name5'];
	// echo $class1;
	// echo $timing;
	// echo $subject;
	$query="UPDATE `time_table` SET slot_1='$subject_1',slot_1='$subject_1',slot_2='$subject_2',slot_3='$subject_3',slot_4='$subject_4',slot_5='$subject_5' WHERE tt_id = '$class1'";
	
	$result = mysqli_query($conn,$query);
	if($result){
		header("location: teacher_tt.php");
		
	}else{
		echo "something is wrong";
		echo $query;
	}
}



?>