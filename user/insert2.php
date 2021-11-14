<?php 
 
 
  require '../db_config.php';
  $course_list = fetch_all_data_usingPDO($pdo, 'select * from course_table');
  




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

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<title>Course Insertion</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center">Course for CSE</h1>

	<div class="container mt-5">
		<form action="action.php" method="POST">
			
             <div class="form-group">
                <label>Course Name:</label>
                <select class="form-control" name="course_code">
                        <?php 
                          foreach ($course_list as $key => $data) {
                        ?>
                        
                      

                        <option value="<?= $data['course_code']; ?>"><?= $data['course_name'] ?></option>

                        <?php 
                          }
                        ?>
                        
                        
                      </select>
                </div>

       

        <div class="form-group">
		    <label>Trimester:</label>
		    <select class="form-control" name="trimester">
                <option >--Select Option--</option>
                

                <?php 
                  for ($i=1;$i<=16;$i++) {
                ?>
                <option value="<?= $i ?>"><?= $i ?></option>

                <?php 
                  }
                ?>
                
              </select>
		    </div>
		    

       <div class="form-group">
        <label>Trimester:</label>
        <select class="form-control" name="gpa">
                <option >--Select Option--</option>
                <option value="4.00">4.00</option>
                <option value="3.67">3.67</option>
                <option value="3.33">3.33</option>
                <option value="3.00">3.00</option>
                <option value="3.00">3.00</option>
                <option value="2.67">2.67</option>
                <option value="2.33">2.33</option>
                <option value="2.00">2.00</option>
                <option value="1.67">1.67</option>
                <option value="1.33">1.33</option>
                <option value="1.00">1.00</option>
                <option value="0.00">0.00</option>   
              </select>
        </div>
          
		  
          <button type="submit" name="btn-resultinsert" class="btn btn-primary">Submit</button>
		
        </form>
	</div>



   <div class="container mt-5">
        <h2 class="text-center">Course Table</h2>
            
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Sl</th>

              <th>Course Code</th>
              <th>Name</th>
              <th>Group</th>
              <th>Credit Hr.</th>
                <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            foreach ($course_list as $key => $data){
            ?>

            <tr>
                <td><?=  $key+1 ?> </td>

                <td><?= $data['course_code'] ?></td>
                <td><?= $data['course_name'] ?></td>
                <td><?= $data['course_group'] ?></td>
                <td><?= $data['course_credit'] ?></td>
                <td>
                    <!-- <a href="{{ route('course_delete', $data->id) }}" class="btn btn-danger">Delete</a> -->
                </td>

            </tr>
            <?php 
            }
            ?>
           
          
           
           
          </tbody>
        </table>
      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>