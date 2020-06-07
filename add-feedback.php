<?php
session_start();
$subjectClass = filter_input(INPUT_POST, 'className');
$studentName = filter_input(INPUT_POST, 'studentName');
$addFeedback = filter_input(INPUT_POST, 'addingFeedback');
if($addFeedback == "YES") {
  $feedback = filter_input(INPUT_POST, 'feedback');
}
else {}
// Create connection
$exploded = explode(' ',$studentName);
$firstName = str_split($exploded[0]);
$id = $firstName[0].$exploded[1];
// echo $id;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>STEM SEED - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" type = "text/css" href="css/style.css">
  </head>
  <body>
    <?php
    if($addFeedback == "NO") {
      echo(
        " <h1>$studentName</h1>
          <form action=\"./add-feedback.php\" method=\"POST\">
          <input type=\"hidden\" name=\"studentName\" id = \"studentName\" value=\"$studentName\">
          <input type=\"hidden\" name=\"className\" id = \"className\" value=\"$subjectClass\">
          <input type=\"hidden\" name=\"addingFeedback\" id = \"addingFeedback\" value=\"YES\">
          <div class = \"col-md-100\"><textarea rows = \"10\" col = \"40\" name=\"feedback\" id = \"feedback\" placeholder = \"type your feedback here\"></textarea></div>
          <input type = \"submit\" class='btn btn-primary py-3 px-4' value = \"Submit Feedback\">
        </form>");
    }
    else {
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
        $sql = "INSERT INTO `feedback`(`feedback`, `className`, `studentID`) VALUES ("."'$feedback'".","."'$subjectClass'".","."'$id'".")";
        if ($results = $conn->query($sql)){
          echo "feedback added successfully!";
          echo("<a class='btn btn-primary py-3 px-4' href='./classList.php'>Go back to class list</a>");
        }
        else {
          echo "database connection failed";
        }
      }
    }
    ?>
  </body>
  </html>
