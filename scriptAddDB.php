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
    $resultsList = mysqli_fetch_all($results);

    $subject = 2;
    for($x = 0;$x<count($resultsList);$x++) {
      $subject = $resultsList[$x][3];
      $name = $resultsList[$x][1];
      $exploded = explode(' ',$resultsList[$x][1]);
      $firstName = str_split($exploded[0]);
      $id = $firstName[0].$exploded[1];
      $sql = "INSERT INTO"."`$subject`"."(`name`,`id`,`grade`) VALUES("."'$name'".","."'$id'".",0)";
      // $sql = $resultsList[$x][2];
      print_r($sql);
      if ($conn->query($sql)){
      print_r($sql);
      }
      else {
        echo "Unsuccessful";
      }
    }
  }
  else {
    echo "no results";
  }
}


 ?>
