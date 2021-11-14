
<?php require 'd_header.php' ?>

<?php 
 
 include '../db_config.php';
 

 $studentID =  $_SESSION['user_id'];

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

	//echo $predictive_course_grpName;


	$FINAL_courseList = [];
	$final_count =0;
	foreach ($remainingCourses as $key => $data) {
		$course_code = trim($remainingCourses[$key]);

		// echo $course_code.'<br>';
		$COURSE = fetch_all_data_usingDB($db, "SELECT * FROM `course_table` where course_group = '$predictive_course_grpName' and course_code like '%$course_code';");

			if(!empty($COURSE))
			{
				$FINAL_courseList[$final_count]= $COURSE['course_code'].'-'.$COURSE['course_name'].'-'.$COURSE['course_credit'];
				$final_count++;
				//echo '<br>'.$COURSE['course_name'].'--'.$COURSE['course_name'].'<br>';
			}
	}


	foreach ($GROUP_name as $key => $value) {
	 		//echo $value.'<br>';
	 	}
	
	


 	
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






<!-- ########## START: LEFT PANEL ########## -->
<?php require 'd_leftpanel.php' ?>
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<?php require 'd_headpanel.php' ?>
<!-- ########## END: HEAD PANEL ########## -->

    

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.php">PMCMS</a>
      <span class="breadcrumb-item active">Predictive Courses</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->
     

        <div class="row row-sm mg-t-20">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-transparent pd-20 bd-b bd-gray-200">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Suggested Courses</h6>
              </div><!-- card-header -->
              <table class="table table-white table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                    <th class="wd-10p pd-y-5">Serial</th>
                    <th class="pd-y-5">Code</th>
                    <th class="pd-y-5">Course Name</th>
                    <th class="pd-y-5">Credit</th>

                  </tr>
                </thead>
                <tbody>
                  <?php 

                  	foreach ($FINAL_courseList as $key => $data) {


                  		$ARR = explode("-",$data);

				 		$preditive_courseCode = $ARR[0];
				 		$preditive_courseName = $ARR[1];
				 		$preditive_courseCredit  = $ARR[2];
                  ?>
					<tr>
	                    <td class="pd-l-20">
	                      <?= $key+1 ?>
	                    </td>
	                    <td>
	                      <a class="tx-inverse tx-14 tx-medium d-block"><?= $preditive_courseCode ?></a>
	                     
	                    </td>
	                    <td>
	                      <a class="tx-inverse tx-14 tx-medium d-block"><?= $preditive_courseName ?></a>
	                    </td>
	                    <td>
	                      <a class="tx-inverse tx-14 tx-medium d-block"><?= $preditive_courseCredit ?></a>
	                    </td>
	                  </tr>


                  <?php 
                  	}

                  ?>
                  
                  
                </tbody>
              </table>
              
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-20 mg-lg-t-0">
            <div class="card">
              <div class="card-header pd-20 bg-transparent bd-b bd-gray-200">
                <h6 class="card-title tx-uppercase tx-12 mg-b-0">Average GPA in Course Group Wise</h6>
              </div><!-- card-header -->
              <table class="table table-white table-responsive mg-b-0 tx-12">
                <thead>
                  <tr class="tx-10">
                    <th class="wd-10p pd-y-5">Serial</th>
                    <th class="pd-y-5">Course Group</th>
                    <th class="pd-y-5">Avg GPA</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 

                  	foreach ($GROUP_name as $key => $data) {


                  		$ARR = explode("-",$data);

				 		$sp_groupName = $ARR[0];
				 		$sp_gpa = $ARR[1];	
                  ?>
					<tr>
	                    <td class="pd-l-20">
	                      <?= $key+1 ?>
	                    </td>
	                    <td>
	                      <a class="tx-inverse tx-14 tx-medium d-block"><?= $sp_groupName ?></a>
	                     
	                    </td>
	                    <td>
	                      <a class="tx-inverse tx-14 tx-medium d-block"><?= number_format($sp_gpa, 2) ?></a>
	                      
	                    </td>
	                  </tr>


                  <?php 
                  	}

                  ?>
                  
                  
                </tbody>
              </table>
              
            </div><!-- card -->
          </div><!-- col-6 -->
        </div>
      
    </div><!-- sl-pagebody --><!-- END MAIN CONTENT -->


  <?php require 'd_footer.php' ?>
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <?php require 'd_javascript.php' ?>


   <script>
    $('#myTable').DataTable({
    bLengthChange: true,
    searching: true,
    responsive: true
  });
  </script>
  </body>
</html>
