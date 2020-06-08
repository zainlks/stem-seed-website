<?php
// print_r($_FILES);
$className = filter_input(INPUT_POST, 'className');
echo $className;
$className = str_replace(" ","-",$className);
echo $className;
if(isset($_FILES['contentFile'])) {
  echo($_FILES['contentFile']['name']);
  if(move_uploaded_file($_FILES['contentFile']['tmp_name'],"./content/$className/".$_FILES["contentFile"]["name"])){
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
