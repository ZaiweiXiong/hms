<!DOCTYPE HTML>
<html>
<head>
      
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          
</head>
<body>
<?php
?>  
    <div class="container">
   
        <div class="page-header">
            <h1>Edit Patient Details</h1>
        </div>
      



<form  method="post" action="<?php echo base_url(); ?>index.php/hmscontrol/editOne">

    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>ID</td>
            <td><input type='text' name='pId' value="<?php echo $m[0]->pId ?>"class='form-control' /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type='text' name='pFirstName'  value="<?php echo $m[0]->pFirstName ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type='text' name='pLastName'  value="<?php echo $m[0]->pLastName ?>" class='form-control' /></td>
        </tr>
		<tr>
            <td>DOB</td>
            <td><input type='date' name='dob' value= "<?php echo $m[0]->dob ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input list='gender' name='gender' value= "<?php echo $m[0]->gender ?>">
                <datalist id='gender'>
                <option value='m'>
                <option value='f'>
                </datalist>
  
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type='email' name='email' value= "<?php echo $m[0]->email ?>"class='form-control' /></td>
        </tr>
		 <tr>
            <td>Contact</td>
            <td><input type='text' name='contact'  value= "<?php echo $m[0]->contact ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type='text' name='address'  value= "<?php echo $m[0]->address ?>"  class='form-control' /></input></td>
        </tr>
          <tr>
            <td>Chief Complaint</td>
            <td><input class='form-control' value= "<?php echo $m[0]->complaint ?>" name='complaint'></input></td>
        </tr>
         <tr>
            <td>Health Conditions</td>
            <td><input class='form-control' value= "<?php echo $m[0]->healthConditions ?>" name='healthCondition'></input></td>
        </tr>
         <tr>
            <td>Allergies</td>
            <td><input class='form-control'  value= "<?php echo $m[0]->allergies ?>" name='allergies'></input></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <input  type='submit' value='Edit' class='btn  btn-primary' />
               
            </td>
        </tr>
    </table>
</form>
          
    </div> 

  
</body>
</html>