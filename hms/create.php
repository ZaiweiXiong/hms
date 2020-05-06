<!DOCTYPE HTML>
<html>
<head>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>
<body>
  
    <div class="container">
   
        <div class="page-header">
            <h1>Patient Details</h1>
        </div>
      



<form method="post" action="http://localhost/hms/index.php/hmscontrol/create">


    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>ID</td>
            <td><input type='text' name='pId' class='form-control' /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='pFirstName' class='form-control' /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='pLastName' class='form-control' /></td>
        </tr>
		<tr>
            <td>DOB</td>
            <td><input type='date' name='dob' class='form-control' /></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input list='gender' name='gender'>
                <datalist id='gender'>
                <option value='m'>
                <option value='f'>
                </datalist>
  
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type='email' name='email' class='form-control' /></td>
        </tr>
		 <tr>
            <td>Contact</td>
            <td><input type='text' name='contact' class='form-control' /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea class='form-control'name='address'></textarea></td>
        </tr>
          <tr>
            <td>Chief Complaint</td>
            <td><textarea class='form-control' name='complaint'></textarea></td>
        </tr>
         <tr>
            <td>Health Conditions</td>
            <td><textarea class='form-control' name='healthCondition'></textarea></td>
        </tr>
         <tr>
            <td>Allergies</td>
            <td><textarea class='form-control' name='allergies'></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input type='submit' value='Add patient' class='btn  btn-primary' />
                <input onClick="window.location.href='http://localhost/hms/hms/index.php'" Value="Go back"  class='btn  btn-primary' >
               
            </td>
        </tr>
    </table>
</form>
          
    </div> 

  
</body>
</html>