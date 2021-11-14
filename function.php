<?php 
 
 //SELECT COUNT(*), course_table.course_group FROM `course_result` join course_table on course_result.course_code = course_table.course_code where course_result.student_id = '11171212' GROUP By course_table.course_group

//SELECT course_result.trimester,course_result.gpa, course_table.course_group ,course_table.course_name FROM `course_result` join course_table on course_result.course_code = course_table.course_code where course_result.student_id = '11171212' order by course_result.trimester




 include 'db_config.php';

 $studentID = '11171212';


 	$course_group = fetch_all_data_usingPDO($pdo, "select * from course_table group by course_group");
 	$data_collection = fetch_all_data_usingPDO($pdo, "SELECT course_table.course_code,course_result.trimester,course_result.gpa, course_table.course_group ,course_table.course_name FROM `course_result` join course_table on course_result.course_code = course_table.course_code where course_result.student_id = '$studentID'");
 	$gpa = [];
 	$GROUP_name = [];
 	$gpa_count =0;
 	$group_count =0;
 	foreach ($course_group as $key => $value) {
 		$grp_name = $value['course_group'];

 		$gpa_sum =0;
 		$count=0;

 		foreach ($data_collection as $key => $data) {
 			if($grp_name == $data['course_group'])
 			{

 				$gpa_sum += (float)$data['gpa'];
 				$count++;
 			}
 		}
 		if($gpa_sum!=0)
 		{
 			
 			$avg = $gpa_sum/$count;
 		
	 		$gpa[$gpa_count] = $avg;

	 		$gpa_count++;

	 		$GROUP_name[$group_count] = $grp_name.'-'.$avg;
			$group_count++;
 		}
 		
 		
 	}


 	
 	foreach ($GROUP_name as $key => $value) {
 		echo $value.'<br>';
 	}

 	$seperate_gpa = [];
 	$seperate_grpName = [];
 	$cc= 0;

 	foreach ($GROUP_name as $key => $data) {
 		$ARR = explode("-",$data);

 		$seperate_grpName[$cc] = $ARR[0];
 		$seperate_gpa[$cc] = $ARR[1];

 		$cc++;
 	}

 	$highest = -999;
 	$index = 0;
 	foreach ($seperate_gpa as $key => $data) {
 		if($highest < $data){
 			$highest =$data;
 			$index = $key;
 		}
 	}


 	$predictive_course_grpName =  $seperate_grpName[$index];

 	


 	$finalData = fetch_all_data_usingPDO($pdo, "SELECT course_table.course_code,course_result.trimester,course_result.gpa, course_table.course_group ,course_table.course_name FROM `course_result` join course_table on course_result.course_code != course_table.course_code");

	$taken_TotalList = fetch_all_data_usingPDO($pdo, "select course_code from course_result where student_id = '$studentID'");
	$AllCourse =  fetch_all_data_usingPDO($pdo, "select * from course_table");

	$course_TotalList = [];
	$course_total_count = 0;

	$course_taken_list = [];
	$course_taken_list_count = 0;

	foreach ($AllCourse as $key => $data) {
		$course_TotalList[$course_total_count]= $data['course_code'];
		$course_total_count++;
	}

	foreach ($taken_TotalList as $key => $data) {
		$course_taken_list[$course_taken_list_count]= $data['course_code'];
		$course_taken_list_count++;
	}
	
	$remainingCourses = [];
	$remaining_count = 0;

	// foreach ($course_taken_list as $key => $data) {
	// 	echo $data.'<br>';
	// }


	$remainingCourses = array_diff($course_TotalList, $course_taken_list);
	// foreach ($remainingCourses as $key => $data) {
	// 	echo $data.'<br>';
	// }

	echo $predictive_course_grpName;



	foreach ($remainingCourses as $key => $data) {
		$course_code = trim($remainingCourses[$key]);

		// echo $course_code.'<br>';
		$COURSE = fetch_all_data_usingDB($db, "SELECT * FROM `course_table` where course_group = '$predictive_course_grpName' and course_code like '%$course_code';");

			if(!empty($COURSE))
			{
				echo '<br>'.$COURSE['course_name'].'--'.$COURSE['course_code'].'<br>';
			}
	}

	
	
	echo md5('123');


 	
	function fetch_all_data_usingPDO($pdo,$sql)
	{
		
		$statement = $pdo->prepare($sql);
		$statement->execute();
		$row = $statement->fetchAll();

		return $row;
	}


	function fetch_all_data_usingDB($db,$sql){
			
			$result = mysqli_query($db,$sql);
		    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		    mysqli_free_result($result);
		    return $row;
		}

?>