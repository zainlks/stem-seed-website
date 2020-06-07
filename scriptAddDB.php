<?php

$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";
$feedbackList = array();
$peopleList = array();
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
      $subject = $resultsList[$x][3]; //3
      $name = $resultsList[$x][1]; //1
      if(in_array($name,$peopleList)) {}
        else {
          array_push($peopleList,$name);
        }
      $exploded = explode(' ',$resultsList[$x][1]);
      $firstName = str_split($exploded[0]);
      $id = $firstName[0].$exploded[1];
      $sql = "INSERT INTO"."`$subject`"."(`name`,`id`,`grade`) VALUES("."'$name'".","."'$id'".",0)";
      // $sql = $resultsList[$x][2];
      // print_r($sql);
      if ($conn->query($sql)){
      // print_r($sql);
      }
      else {
        echo "Unsuccessful";
      }
    }
    for($z = 0;$z<count($peopleList);$z++) {
      $sql = "SELECT subject FROM register WHERE name ="."'$peopleList[$z]'";
      if($results = $conn->query($sql)) {
        $subjectsRegistered = array();
        $resultsList = mysqli_fetch_all($results);
        for($x = 0;$x<count($resultsList);$x++) {
          array_push($subjectsRegistered,$resultsList[$x][0]);
        }
        echo($peopleList[$z]);
        print_r($subjectsRegistered);
        $exploded = explode(' ',$peopleList[$z]);
        $firstName = str_split($exploded[0]);
        $id = $firstName[0].$exploded[1];
        $sql = "INSERT INTO `portalLogin`(`id`, `password`, `teacher`";
        for($n = 0;$n<count($subjectsRegistered);$n++) {
          $cur = $n+1;
          $sql = $sql.",class$cur";
          if($n+1 == count($subjectsRegistered)) {
            $sql = $sql.")VALUES ("."'$id'".",'stemseedtemp',1";
            for($m = 0;$m<count($subjectsRegistered);$m++) {
              $curNum = $m;
              $sql = $sql.","."'$subjectsRegistered[$curNum]'";
              if($m + 1 == count($subjectsRegistered)) {
                $sql = $sql.")";
              }
              else{}
            }
          }
          else {}
        }
        // echo($sql);
            if ($conn->query($sql)){
            print_r($sql);
          }
          else {
            echo "Unsuccessful";
          }
      }
      else{}
    }
  }
  else {
    echo "no results";
  }
}


 ?>
