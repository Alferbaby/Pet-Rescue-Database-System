<?php
$db = mysqli_connect('localhost', 'tester', '123456', 'project');

$ID = $_POST['ID'];
$Last_Name = $_POST['Last_Name'];
$First_Name = $_POST['First_Name'];
$Address = $_POST['Address'];
$PhoneNumber = $_POST['PhoneNumber'];
$result ="INSERT INTO Adopter VALUES('$ID','$Last_Name','$First_Name','$Address','$PhoneNumber')";
if(!mysqli_query($db,$result)) {
    echo 'Error';
}
else {
    echo 'Done';
}
?>
