<?php
// print_r($_FILES);
if(isset($_FILES['testFile'])) {
  echo($_FILES['testFile']['name']);
if(move_uploaded_file($_FILES['testFile']['tmp_name'],"./".$_FILES["testFile"]["name"])){
  echo("file upload success");
}
else {
  echo("file upload failed");
}
}
else {
  echo("goodbye");
}

 ?>
