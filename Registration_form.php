<?php

$txtname = $_POST['txtname'];
$txtUsername = $_POST['txtUsername'];
$txtDOB = $_POST['txtDOB'];
$txtGender = $_POST['txtGender'];
$txtEmailid = $_POST['txtEmailid'];
$txtno = $_POST['txtno'];
$txtAltno = $_POST['txtAltno'];




if (!empty($txtname) || !empty($txtUsername) || !empty($txtDOB) || !empty($txtGender) || !empty($txtEmailid) || !empty($txtno) || !empty($txtAltno) )
{

$host = "localhost";
$dbusername = "dilli";
$dbpassword = "Swagers@00";
$dbname = "dilli";



// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
  die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
}
else{
  $SELECT = "SELECT email From register Where email = ? Limit 1";
  $INSERT = "INSERT Into register (txtname , txtUsername ,txtDOB, txtGender, txtEmailid, txtno, txtAltno )values(?,?,?,?,?,?,?)";

//Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $txtname);
     $stmt->execute();
     $stmt->bind_result($txtname);
     $stmt->store_result();
     $rnum = $stmt->num_rows;

     //checking username
      if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $txtname , $txtUsername , $txtDOB, $txtGender, $txtEmailid, $txtno, $txtAltno);
      $stmt->execute();
      echo "Registration Records Inserted sucessfully";
     } else {
      echo "Someone already registered using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>