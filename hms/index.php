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
            <h1>Patients List</h1>
        </div>
         
        <?php
include 'config/database.php';
 

$query = "SELECT pId, pFirstName, pLastName, dob,gender,email,contact  FROM patient";
$stmt = $con->prepare($query);
$stmt->execute();
 
$num = $stmt->rowCount();
 

 
if($num>0){
 
    echo "<table class='table table-hover table-responsive table-bordered'>";//start table
 

    echo "<tr>";
        echo "<th>pId</th>";
        echo "<th>pFirstName</th>";
        echo "<th>pLasttName</th>"; 
        echo "<th>dob</th>";
    echo "</tr>";
     
   
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    extract($row);
     
    echo "<tr>";
        echo "<td>{$pId}</td>";
        echo "<td>{$pFirstName}</td>";
        echo "<td>{$pLastName}</td>";
        echo "<td>{$dob}</td>";

        echo "<td>";
             
            echo "<a href='http://localhost/hms/index.php/hmscontrol/detail?pId={$pId}' name={$pId} class='btn btn-info m-r-1em'>Details</a>";
             
            
            echo "<a href='http://localhost/hms/index.php/hmscontrol/fedit?pId={$pId}' class='btn btn-primary m-r-1em'>Edit</a>";
 
            
            echo "<a href='http://localhost/hms/index.php/hmscontrol/deleteOne?pId={$pId}' name={$pId} class='btn btn-danger'>Delete</a>";
        echo "</td>";
    echo "</tr>";
} 

echo "</table>";
echo "<a href='create.php' class='btn btn-info'>Add new patient</a>";
}
else{
    echo "<div class='alert alert-danger'>No records found.</div>";
	echo"<a href='http://localhost/hms/hms/create.php' class='btn btn-info'>Add new patient</a>";
}


?>
    </div> 

 <div id="footer"></div>
</body>
</html>