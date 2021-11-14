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
                <label>Student ID:</label>
                <input type="text" class="form-control" name="student_id">
              </div>
               <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" name="name">
              </div>

               <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" name="email">
              </div>

               <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control" name="contact">
              </div>
      
              <div class="form-group">
                <label>address:</label>
                <input type="text" class="form-control" name="address">
              </div>
		    
         <div class="form-group">
                <label>Father's Name:</label>
                <input type="text" class="form-control" name="father_name">
              </div>

               <div class="form-group">
                <label>Mother Name:</label>
                <input type="text" class="form-control" name="mother_name">
              </div>

               <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" name="password">
              </div>


          <button type="submit" name="btn-insertStudent" class="btn btn-primary">Submit</button>
		
        </form>
	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>