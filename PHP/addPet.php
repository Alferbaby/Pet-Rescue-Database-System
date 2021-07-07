<?php
$db = mysqli_connect('localhost', 'tester', '123456', 'project');

$chipID = $_POST['chipID'];
$Name = $_POST['Name'];
$Age = $_POST['age'];
$Description = $_POST['Description'];
$result ="INSERT INTO pet VALUES('$chipID','$Name','$Age','$Description')";
if(!mysqli_query($db,$result)) {
    echo 'Error';
}
else {
    echo 'Done';
}
?>
