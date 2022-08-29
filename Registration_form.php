<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'Swagers@00','dilli');


// get the post records
$txtname = $_POST['txtname'];
$txtUsername = $_POST['txtUsername'];
$txtDOB = $_POST['txtDOB'];
$txtGender = $_POST['txtGender'];
$txtEmailid = $_POST['txtEmailid'];
$txtno = $_POST['txtno'];
$txtAltno = $_POST['txtAltno'];

// database insert SQL code
$sql = insert into tbl_registrationinfo(fullname,username,dob,gender,email,phoneno,alternatephoneno) values
('txtname','txtUsername','txtDOB','txtGender','txtEmailid','txtno','txtAltno');

// After Records inserted -- This Query will be useful to see all the inserted records  -- select * from tbl_registrationinfo;

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration Records Inserted";
}
else
{
	echo "Insertion failed!";
}

?>