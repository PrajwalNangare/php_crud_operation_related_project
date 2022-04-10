<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update a Record</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/button.min.css" rel="stylesheet"/>
     
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
     
    <script src=
"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
     
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
</head>
 
<body>
    <h1 class="text-success text-center">Update a Record</h1>
    <div class="container">
        <form action="" method="GET" class="was-validated">
            <div class="form-group">
                <label for="rollno">Roll No:</label>
                <input type="text" class="form-control" id="rollno"
                value="<?php echo $_GET['rollno'];?>" name="rollno" required>
                <div class="valid-feedback">Valid</div>
            </div>
             
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name"
                value="<?php echo $_GET['name'];?>" name="name" required>
                <div class="valid-feedback">Valid</div>
  
            </div>
             
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="class" class="form-control" id="class"
                value="<?php echo $_GET['class'];?>"  name="class" required>
                <div class="valid-feedback">Valid</div>
            </div>
            <input type="submit" name="submit" class="ui small red button" value="Update"/>
        </form>
    </div>
<?php 
$servername="localhost:18000";
$username="root";
$password="";
$db="crud_operation_in_php_project";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn->connect_error)
 {
die("Connection failed: " . $conn->connect_error);
}
else
{
echo "";
}
?> 
<?php
if(isset($_GET['submit']))
{
  $rollno=$_GET['rollno'];
  $name=$_GET['name'];
  $class=$_GET['class'];
  $query="update student set name='$name', class='$class' where rollno='$rollno'";
  $data=mysqli_query($conn,$query);
  if($data)
  {
    echo "<font color='green'><center>Record  Updated Successfully.</center> <center><a href='Print_a_Records.php'>Check Updated List Here</a></center>";
  }
  else
  {
    echo "<center>Record Not Updated.</center>";
    
  }
}
else
{
  echo "<font color='blue'><center>Click on Update Button to save the changes</center>";
}
?>
</body>
</html>

