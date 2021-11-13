<?php 
    
    require 'custom_function.php';
    if(isset($_GET['product_master_category']))
    {
      $master_category_name = $_GET['product_master_category'];

      $product_list = fetch_all_data_usingPDO($pdo,"select * from category join product on product.category_id = category.id WHERE product.quantity > 0 and category.master_category_name like '$master_category_name'");
    }
    else{
      header('Location: index.php');
    }
    

?>


<?php require 'd_header.php' ?>

<!-- ########## START: LEFT PANEL ########## -->
<?php require 'd_leftpanel.php' ?>
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
<?php require 'd_headpanel.php' ?>
<!-- ########## END: HEAD PANEL ########## -->

    

  <!-- ########## START: MAIN PANEL ########## -->
  <div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
      <a class="breadcrumb-item" href="index.php">Home</a>
      <span class="breadcrumb-item active">Student Information</span>
    </nav>

    <div class="sl-pagebody"><!-- MAIN CONTENT -->
      <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Student Details</h6>
          
          <?php

            if(isset($_GET['update']))
            {
          ?>

           <div class="alert alert-success alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Added Successfully!
          </div>
          <?php 
            }
          ?>


          <?php

            if(isset($_GET['exist']))
            {
          ?>

           <div class="alert alert-warning alert-dismissible" style="height: 50px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
              Product Aleary Added!
          </div>
          <?php 
            }
          ?>
         
          <div class="row mt-3" style="color: black;font-size: 18px;">
            <div class="col">
              <label style="font-weight:700;">Name: </label>
              <span>Yeamin Rabbi Bin Akram</span>
            </div>
            
            <div class="col">
              <label style="font-weight:700;">Id: </label>
              <span>011171248</span>
            </div>

            <div class="col">
              <label style="font-weight:700;">Email: </label>
              <span>yakram@bscse.uiu.ac.bd</span>
            </div>

            
          </div>

          <div class="row mt-2" style="color: black;font-size: 18px;">
            <div class="col">
              <label style="font-weight:700;">Completed Credit: </label>
              <span>109 Cr</span>
            </div>
            <div class="col">
              <label style="font-weight:700;">Total Credit: </label>
              <span>138</span>
            </div>
            <div class="col">
              <label style="font-weight:700;">Transcript CGPA: </label>
              <span>2.83</span>
            </div>
            
          </div>


          <div class="row mt-2" style="color: black;font-size: 18px;">
            <div class="col">
              <label style="font-weight:700;">Father's Name: </label>
              <span>Md. Akram Ali</span>
            </div>
            <div class="col">
              <label style="font-weight:700;">Mother's Name: </label>
              <span>Nargis Akhter</span>
            </div>

            <div class="col">
              <label style="font-weight:700;">Gaurdian: </label>
              <span>Keya Yeasmin</span>
            </div>
            
            
          </div>




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
