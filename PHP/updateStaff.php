<?php
$db = mysqli_connect('localhost', 'tester', '123456', 'project');
if(issert($_POST['update'])){
    $SID = $_POST['SID'];
    $query ="UPDATE STAFF SET Last_Name = '$_POST[Last_Name]', First_Name = '$_POST[First_Name]' WHERE SID = '$_POST[SID]'";
    mysqli_query($db,$query);
}

?>
