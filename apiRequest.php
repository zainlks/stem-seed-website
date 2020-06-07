<?php

$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";
$feedbackList = array();
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql = "SELECT * FROM register";
  if ($results = $conn->query($sql)){
    // $resultsList = mysqli_fetch_all($results);
    $jsonList = [];
    while($resultsList = mysqli_fetch_assoc($results)) {
      array_push($jsonList,$resultsList);
    }
    print json_encode($jsonList);
  }
  else {
    echo "no results";
  }
}


 ?>
