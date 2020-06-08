<?php

$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";

// Create connection

function checkClassav($className) {
    $conn = new mysqli ('localhost', 'stemseed_zain', 'alza1302', 'stemseed_signupClasses');


              if (mysqli_connect_error()){
              die('Connect Error ('. mysqli_connect_errno() .') '
              . mysqli_connect_error());
              }
              else{
              $sql = "SELECT studentNum FROM classList WHERE className =". "'$className'";
              if ($results = $conn->query($sql)){
                  $classSize = mysqli_fetch_array($results);
                  $classSize = $classSize[0];
              // //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
                if($classSize >= 5) {
                  echo "<p><a href='#' class='btn btn-danger py-3 px-4'  onclick=\"return confirm('This class has been completely filled, look out for a new session in June 2020')\">Availability: Full</a></p>";
                }
                else {
                  echo "<p><a href='./register.html' class='btn btn-primary py-3 px-4'>Availability: Register Now</a></p>";
                }
              }
              else {
                  echo $conn->error;
              }
            }
}


?>
