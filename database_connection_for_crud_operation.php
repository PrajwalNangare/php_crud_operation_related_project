//practice code of registration form database
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
/*
//code for creating a database
$query="create database crud_operation_in_php_project"; //first create database databasename lihine aahe mag nantar $db="databasenamr" aani mag nantar $conn chya aat $db lihine aahe
if(mysqli_query($conn, $query))
{
    echo "database created";
}
else
{
    echo "database not created";
}
//end a code for creating a database
*/
/*
//below code is for creating a table
//in this student table the rollno is declared as primary key and if primary key is defined for any particular column, then data of this particular column are not repeated, hence the any data is not repeatd in rollno column
$query1="create table student(rollno int(10), name varchar(60) primary key, class varchar(100));";
mysqli_query($conn,$query1);
if(mysqli_query($conn,$query1))
{
    echo "table is created successfully";
}
else
{
    echo "table is not created";
}
//end a creating table code
*/
