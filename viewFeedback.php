<?php
session_start();
$subjectClass = filter_input(INPUT_GET, 'className');
$studentID = filter_input(INPUT_GET,'studentID');

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
  $sql = "SELECT feedback FROM feedback WHERE studentID = "."'$studentID'"."and "."className ="."'$subjectClass'";
  if ($results = $conn->query($sql)){
    $resultsList = mysqli_fetch_all($results);

    for($x = 0;$x<count($resultsList);$x++) {
      array_push($feedbackList,$resultsList[$x][0]);
    }
    $_SESSION['subjectClass'] = $subjectClass;
    echo $_SESSION['subjectClass'];
    $_SESSION['feedbackList'] = $feedbackList;
    echo $_SESSION['feedbackList'];
    header("Location: ./displayFeedback.php");
  }
  else {
    echo "no results";
  }
}


 ?>
