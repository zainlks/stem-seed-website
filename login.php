<?php
session_start();
include './include.php';
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";
$teacherClasses = [];
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "SELECT * FROM portalLogin WHERE id ="."'$username'";
if ($results = $conn->query($sql)){
    $resultArray = mysqli_fetch_array($results);
    $returnPassword = $resultArray[1];
// //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
  if($returnPassword == $password) {
    date_default_timezone_set('Canada/Eastern');
    $date = date("d/m/Y h:i:s a");
    $sql = "UPDATE portalLogin SET lastAccessed ="."'$date'"."WHERE id="."'$username'";
    if($conn->query($sql)){}
    else{}
    for($x = 3; $x<count($resultArray);$x++) {
      if($resultArray[$x] == NULL) {
        if($resultArray[2] == 10) {
          // echo(count($teacherClasses));
          $_SESSION['teacherClasses'] = $teacherClasses;
          echo $_SESSION['teacherClasses'];
          header("Location: ./teacher-portal.php");
          exit();
        }
        else {
          $_SESSION['teacherClasses'] = $teacherClasses;
          echo $_SESSION['teacherClasses'];
          $_SESSION['username'] = $username;
          echo $_SESSION['username'];
          header("Location: ./student-portal.php");
          exit();
        }
        return;
      }
      else {
        // echo "$resultArray[$x]<br>";
        // echo(isset($teacherClasses));
        array_push($teacherClasses,$resultArray[$x]);
        // echo(count($teacherClasses));
      }
    }
  }
  else {
    // echo "Login bad";
  }
}
  else {
      // echo $conn->error;
  }
}
?>
