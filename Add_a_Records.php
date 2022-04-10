/*
//code of data insertion into database through form
*/
<html>
<head>
</head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/button.min.css" rel="stylesheet"/>
<style>
center
{
    color:blue;
}
</style>
<body>
</body>
</html>
<?php 
$servername="localhost:18000";
$username="root";
$password="";
$db="crud_operation_in_php_project";
$conn = mysqli_connect($servername, $username, $password,$db);
if($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else
{
echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Form</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     
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
    <h1 class="text-success text-center">Adding A Value into Database</h1>
    <div class="container">
        <form action="" method="GET" class="was-validated">
            <div class="form-group">
                <label for="rollno">Roll No:</label>
                <input type="text" class="form-control" id="rollno"
                        name="rollno" required>
                <div class="valid-feedback">Valid</div>
            </div>
             
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name"
                    name="name" required>
                <div class="valid-feedback">Valid</div>
  
            </div>
             
            <div class="form-group">
                <label for="class">Class:</label>
                <input type="class" class="form-control" id="class"
                     name="class" required>
                <div class="valid-feedback">Valid</div>
            </div>
             
            <input type="submit" name="submit" class="ui small red button" value="Add"/>
        </form>
    </div>
<?php
if(isset($_GET['submit']))
{
    $rn=$_GET['rollno'];
    $name=$_GET['name'];
    $cl=$_GET['class'];
    if($rn!="" && $name!="" && $cl!="")
    {
        $query="insert into student(rollno,name,class)values('$rn','$name','$cl')";
        $data=mysqli_query($conn,$query);
        if($data)
        {
            echo "<center>Data inserted into Database</center>";
        }
    }
    else
    {
        echo "<center>All fields are required</center>";
    }
}
?>
</body>
</html>

