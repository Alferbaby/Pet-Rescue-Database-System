<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $Name = '';
// $AID = 0;
// $phoneNumber = '';
if (isset($_POST['save'])){
   
    $ID =  $_POST['ID'];
    $Last_Name =  $_POST['Last_Name'];
    $First_Name =  $_POST['First_Name'];
    $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $mysqli->query("INSERT INTO Adopter (ID,Last_Name,First_Name,Address, PhoneNumber) VALUES('$ID', '$Last_Name', '$First_Name', '$Address','$PhoneNumber')") or
    die($mysqli->error);     
    header("location: AdopterManage.php");

}
if (isset($_GET['delete'])){
    
    $ID = $_GET['delete'];
    // echo($ID);
    $mysqli->query("DELETE FROM Adopter WHERE ID= $ID") or die($mysqli->error());
    header("location: AdopterManage.php");
}



?>