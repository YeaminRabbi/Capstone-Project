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
                <label>Course Code:</label>
                <input type="text" class="form-control" name="course_code">
              </div>
		

          <div class="form-group">
		    <label>Course Name:</label>
		    <input type="text" class="form-control" name="course_name">
		  </div>


          <div class="form-group">
		    <label>Course Credit:</label>
		    <select class="form-control" name="course_credit">
                <option >--Select Option--</option>
                <option value="3">3 Credit hr</option>
                <option value="2">2 Credit hr</option>
                <option value="1">1 Credit hr</option>
                
              </select>
		  </div>

          <div class="form-group">
		    <label>Course Group:</label>
		    <select class="form-control" name="course_group">
                <option >--Select Option--</option>
                <option value="Language">Language</option>
                <option value="Basic_Sciences">Basic Sciences</option>
                <option value="General Education">General Education</option>
                <option value="Mathematics">Mathematics</option>
                <option value="Other_Engineering">Other Engineering</option>
                <option value="Core_Courses">Core Courses</option>
                <option value="Compolsary_Courses">Compolsary_Courses</option>
                <option value="Programming_Courses">Programming_Courses</option>
                <option value="Software_Engineering">Software_Engineering</option>
                <option value="System">System</option>

                <option value="FYDP">FYDP</option>
                <option value="Elective_Courses">Elective Courses</option>
                
              </select>
		  </div>
		  
          
		  
          <button type="submit" name="btn-courseinsert" class="btn btn-primary">Submit</button>
		
        </form>
	</div>



  <!--   <div class="container mt-5">
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
            
            @foreach ($course_list as $key => $data)
            <tr>
                <td>{{ $key+1 }}</td>

                <td>{{ $data->course_code }}</td>
                <td>{{ $data->course_name }}</td>
                <td>{{ $data->course_group }}</td>
                <td>{{ $data->credit }}</td>
                <td>
                    <a href="{{ route('course_delete', $data->id) }}" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @endforeach
           
           
          </tbody>
        </table>
      </div>

 -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>