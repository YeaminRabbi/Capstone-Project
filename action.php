<?php 
	
 	require 'db_config.php';

 	


	//user login
	if(isset($_POST['btn-login_user']))
	{

		$id = $_POST['id'];
		$password = md5($_POST['password']);

		$sql = "select * from students where student_id = '$id' and password = '$password';";
		$stmt = $pdo->prepare($sql);
	    $stmt->execute(array(
	        ':id' => $id,
	        ':password' => $password));

	     if($stmt->rowCount()==1){
	     	
	     	
	     	$sql2 = "Select * from students where student_id='$id';";
			$result = mysqli_query($db,$sql2);
			$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

			session_start();
			$_SESSION['user']="VERIFIED";
			$_SESSION['user_id']=$row['student_id'];
			$_SESSION['user_name']=$row['name'];

			header("Location: user/index.php");
			

	     }
	     else{
	     	
	     	header("Location: index.php?emsg=error");
	     }


	}

	


	if(isset($_POST['btn-courseinsert']))
		{

			$course_name = $_POST['course_name'];
			$course_code = $_POST['course_code'];
			$course_group = $_POST['course_group'];
			$course_credit = $_POST['course_credit'];
			$department = 'CSE';



			$sql = "INSERT INTO course_table (course_code,course_name,course_group,course_credit,department) VALUES ('$course_code','$course_name','$course_group','$course_credit','$department')";

			if ($db->query($sql) === TRUE) {
			  header('Location: insert.php?msg=inserted');
			 
			} else {
			  echo "Error: " . $sql . "<br>" . $db->error;
			}

		}



		if(isset($_POST['btn-resultinsert']))
		{


			$course_code = $_POST['course_code'];


			$course =  fetch_all_data_usingDB($db, "select * from course_table where course_code = '$course_code'");

			$course_name = $course['course_name'];
			$course_credit = $course['course_credit'];
			$student_id = '011171212';
			$trimester =  $_POST['trimester'];
			$gpa =  $_POST['gpa'];

			$sql = "INSERT INTO course_result (course_code,course_name,course_credit,gpa,student_id,trimester) VALUES ('$course_code','$course_name','$course_credit','$gpa','$student_id','$trimester')";

			if ($db->query($sql) === TRUE) {
			  header('Location: insert2.php?msg=inserted');
			 
			} else {
			  echo "Error: " . $sql . "<br>" . $db->error;
			}




		}

	 function fetch_all_data_usingDB($db,$sql){
			
			$result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row;
		}



		

?>