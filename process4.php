<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $Name = '';
// $AID = 0;
// $phoneNumber = '';
if (isset($_POST['save'])){
   
    $ChipID =  $_POST['ChipID'];
    $Name =  $_POST['Name'];
    $Age = $_POST['Age'];
    $Description = $_POST['Description'];

    $mysqli->query("INSERT INTO Pet(ChipId,Name, Age,Description) VALUES('$ChipID','$Name', '$Age', '$Description')") or
    die($mysqli->error);     
    header("location: Pet.php");

}
if (isset($_GET['delete'])){
    $ChipID = $_GET['delete'];
    $mysqli->query("DELETE FROM Pet WHERE ChipID=$ChipID") or die($mysqli->error());
    header("location: Pet.php");
}

?>