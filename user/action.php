<?php

	require '../db_config.php';
	require 'custom_function.php';
	session_start();

	if(isset($_POST['btn-resultinsert']))
		{


			$course_code = $_POST['course_code'];


			$course =  fetch_all_data_usingDB($db, "select * from course_table where course_code = '$course_code'");

			$course_name = $course['course_name'];
			$course_credit = $course['course_credit'];
			$student_id = $_SESSION['user_id'];
			$trimester =  $_POST['trimester'];
			$gpa =  $_POST['gpa'];

			$sql = "INSERT INTO course_result (course_code,course_name,course_credit,gpa,student_id,trimester) VALUES ('$course_code','$course_name','$course_credit','$gpa','$student_id','$trimester')";

			if ($db->query($sql) === TRUE) {
			  header('Location: insert2.php?msg=inserted');
			 
			} else {
			  echo "Error: " . $sql . "<br>" . $db->error;
			}




		}





?>