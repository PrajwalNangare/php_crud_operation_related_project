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
echo "Connected successfully</br>";
}
$rollno=$_GET['rollno'];
$query="delete from student where rollno='$rollno'";
$data=mysqli_query($conn,$query);
if($data)
{
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content="0; url=http://localhost:15000/php_crud_operation/Print_a_Records.php">
    <?php
}
else
{
    echo "<font color='red'>Sorry, Delete process failed";
} 
?>