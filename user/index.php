<?php require 'd_header.php' ?>


<?php 

 
  require 'custom_function.php';
  $student_id = $_SESSION['user_id'];
  $student_info = fetch_all_data_usingDB($db, "select * from students where student_id = '$student_id';");
  $currentTrimester = fetch_all_data_usingDB($db, "SELECT max(trimester) as 'MAX' FROM `course_result` where student_id = '$student_id'");

  // print_r($student_id);
  // die();

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
      <span class="breadcrumb-item active">Dashboard</span>
    </nav>

    <div class="sl-pagebody">
        <div class="row row-sm mg-t-20">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Student Information</h6>
              
              <div class="row">
                <label class="col-sm-4 form-control-label">Name: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['name'] ?>" disabled>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Email:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['email'] ?>" disabled>
                </div>
              </div>
            
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Student ID: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['student_id'] ?>" disabled>

                </div>
              </div>
              

              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Department: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['department'] ?>" disabled>
                </div>
              </div>
              

              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Curent Trimester: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $currentTrimester['MAX'] ?>" disabled>
                </div>
              </div>  

             
              
            </div><!-- card -->
          </div>

          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
              <h6 class="card-body-title">Personal Information</h6>
              
              <div class="row">
                <label class="col-sm-4 form-control-label">Father's Name: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['father_name'] ?>" disabled>
                </div>
              </div><!-- row -->
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Mother's Name:</label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['mother_name'] ?>" disabled>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Contact(self): </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['contact'] ?>" disabled>
                </div>
              </div>
              <div class="row mg-t-20">
                <label class="col-sm-4 form-control-label">Address: </label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" value="<?= $student_info['address'] ?>" disabled>

                </div>
              </div>
              
            </div><!-- card -->
          </div>
          
        </div>
       
    </div><!-- sl-pagebody --><!-- END MAIN CONTENT -->


  <?php require 'd_footer.php' ?>
  </div><!-- sl-mainpanel -->
  <!-- ########## END: MAIN PANEL ########## -->

  <?php require 'd_javascript.php' ?>
  </body>
</html>
