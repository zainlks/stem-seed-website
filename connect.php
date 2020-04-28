<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$subjectClass = filter_input(INPUT_POST, 'subject');
$phoneNumber = filter_input(INPUT_POST, 'phoneNumber');
$grade = filter_input(INPUT_POST, 'grade');
if (!empty($name)){
if (!empty($email)){
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
$sql = "INSERT INTO register (name, email, subject, phoneNumber, grade)
values ('$name','$email','$subjectClass','$phoneNumber','$grade')";
if ($conn->query($sql)){
$to1 = 'team@stemseed.org';
//define the subject of the email
$subject1 = 'New Registration';
//define the message to be sent. Each line should be separated with \n
$message1 = "Name: $name\nEmail: $email\nSubject: $subjectClass\nPhone Number: $phoneNumber\nGrade: $grade";
//define the headers we want passed. Note that they are separated with \r\n
$headers1 = "From: registrations@stemseed.org\r\nReply-To: registrations@stemseed.org";
//send the email
mail( $to1, $subject1, $message1, $headers1 );

// //define the subject of the email
$subject = 'Registration for STEM SEED Virtual Classes';
//define the message to be sent. Each line should be separated with \n
$message = "Hi there!\nThis email is to confirm we have recieved your registration of your child $name for $subjectClass.\n Within a few days you'll recieve an email to confirm your child's enrollment in the class as well as details on how to make a payment for the class.\n Please feel free to contact team@stemseed.org with any questions!";
//define the headers we want passed. Note that they are separated with \r\n
$headers = "From: team@stemseed.org\r\nReply-To: team@stemseed.org";
//send the email
mail( $email, $subject, $message, $headers );
// //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
header("Location: http://www.stemseed.org/success.html");
exit();
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
