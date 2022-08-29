<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'Swagers@00','dilli');


// get the post records
$txtEmail = $_POST['txtEmail'];
$txtPass = $_POST['txtPass'];


// database insert SQL code
$sql = "insert into 'tbl_customerinfo' ('email_id', 'cust_password', 'updated_by', 'updated_on') values ('$txtEmail','$txtPass', 'ADMIN', '2022-08-28 00:00:00')";

// After Records inserted -- This Query will be useful to see all the inserted records  -- select * from tbl_customerinfo;

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Signup Records Inserted";
}
else
{
	echo "Insertion failed!";
}

?>