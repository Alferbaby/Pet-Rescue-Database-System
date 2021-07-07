<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $Name = '';
// $AID = 0;
// $phoneNumber = '';
if (isset($_POST['save'])){
   
    $Name =  $_POST['Name'];
    $AID =  $_POST['AID'];
    $phoneNumber = $_POST['phoneNumber'];
    $mysqli->query("INSERT INTO EmergencyContact_IsAsscociated (Name,AID, phoneNumber) VALUES('$Name', '$AID', '$phoneNumber')") or
    die($mysqli->error);     
    header("location: EmerContact.php");

}
if (isset($_GET['delete'])){
    $AID = $_GET['delete'];
    $mysqli->query("DELETE FROM EmergencyContact_IsAsscociated WHERE AID=$AID") or die($mysqli->error());
    header("location: EmerContact.php");
}

?>