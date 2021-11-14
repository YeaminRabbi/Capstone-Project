
<?php require 'd_header.php' ?>

<?php 
    
    require 'custom_function.php';

    $course_list = fetch_all_data_usingPDO($pdo,'select * from course_table');

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
      <span class="breadcrumb-item active">Course List</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Course Details</h6>
          
          <?php

            if(isset($_GET['update']))
            {
          ?>

           <div class="alert alert-success alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
             Product Updated Successfully!
          </div>
          <?php 
            }
          ?>


          <?php

            if(isset($_GET['delete']))
            {
          ?>

           <div class="alert alert-danger alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
             Letter Deleted Successfully!
          </div>
          <?php 
            }
          ?>
         
          <div class="table-wrapper">
            <table id="myTable" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th >SL</th>
                  <th >Course Code</th>
                  <th >Course Name</th>
                  <th >Course Group</th>
                  <th >Credit</th>
                </tr>
              </thead>
              <tbody>
                
                <?php

                    foreach ($course_list as $key => $data) {
                ?>
                    <tr>
                      <td><?php echo $key+1; ?></td>
                      <td><?php echo $data['course_code']; ?></td>
                      <td><?php echo $data['course_name']; ?></td>
                      <td><?php echo $data['course_group']; ?></td>
                      <td><?php echo $data['course_credit']; ?></td>
                     
                    </tr>
                <?php
                    }

                ?>
               
                
               
              </tbody>
            </table>
          </div><!-- table-wrapper -->
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
