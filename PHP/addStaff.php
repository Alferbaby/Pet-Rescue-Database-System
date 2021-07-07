<?php
$db = mysqli_connect('localhost', 'tester', '123456', 'project');

$SID = $_POST['SID'];
$Last_Name = $_POST['Last_Name'];
$First_Name = $_POST['First_Name'];
$result ="INSERT INTO Staff VALUES('$SID','$Last_Name','$First_Name')";
if(!mysqli_query($db,$result)) {
    echo 'Error';
}
else {
    echo 'Done';
}
?>

