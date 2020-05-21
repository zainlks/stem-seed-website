<?php
session_start();
$subjectClass = filter_input(INPUT_POST, 'className');
$studentName = filter_input(INPUT_POST, 'studentName');
$newGrade = filter_input(INPUT_POST, 'newGrade');

$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql = "UPDATE"." `$subjectClass`"."SET grade ="."$newGrade "."WHERE name ="."'$studentName'";
  if ($conn->query($sql)){
    header("Location: ./classList.php");
  }
  else {
    echo $sql;
  }
}


 ?>
