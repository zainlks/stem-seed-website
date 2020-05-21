<?php
session_start();
$subjectClass = filter_input(INPUT_GET, 'className');

$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";
$classStudentList = array();
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  $sql = "SELECT name FROM"."`$subjectClass`";
  if ($results = $conn->query($sql)){
    $classList = mysqli_fetch_all($results);
    // $classList[] =  $classList['name'];
    // print_r($classList);
    for($x = 0;$x<count($classList);$x++) {
      array_push($classStudentList,$classList[$x][0]);
    }
    $_SESSION['subjectClass'] = $subjectClass;
    echo $_SESSION['subjectClass'];
    $_SESSION['classStudentList'] = $classStudentList;
    echo $_SESSION['classStudentList'];
    header("Location: ./classList.php");
  }
  else {
    echo "no results";
  }
}


 ?>
