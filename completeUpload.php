<?php

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$host = "localhost";
$dbusername = "stemseed_zain";
$dbpassword = "alza1302";
$dbname = "stemseed_signupClasses";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// print_r($_FILES);
$className = filter_input(INPUT_POST, 'className');
$originalClassName = $className;
echo $className;
$className = str_replace(" ","-",$className);
echo $className;
if(isset($_FILES['contentFile'])) {
  echo($_FILES['contentFile']['name']);
  $newFilePath = "./content/$className/".$_FILES["contentFile"]["name"];
  if(move_uploaded_file($_FILES['contentFile']['tmp_name'],"./content/$className/".$_FILES["contentFile"]["name"])){
    echo("file upload success");
    $sql = "INSERT INTO contentStorage(`fileAddress`, `subject`) VALUES ("."'$newFilePath'".","."'$originalClassName'".")";
    if($conn->query($sql)) {
      echo("successfully added to database");
    }
    else {
      echo("file was not updated in database");
    }
  }
  else {
    echo("file upload failed");
  }
}
else {
  echo("goodbye");
}

 ?>
