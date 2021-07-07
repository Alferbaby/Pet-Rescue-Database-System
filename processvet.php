<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $VID = 0;
// $Name = '';
// $Specialization = '';
if (isset($_POST['save'])){
   
    $VID =  $_POST['VID'];
    $Name =  $_POST['Name'];
    $Specialization = $_POST['Specialization'];
    $mysqli->query("INSERT INTO vet (VID,Name,Specialization) VALUES('$VID', '$Name', '$Specialization')") or
    die($mysqli->error);     
    header("location: vet.php");

}
if (isset($_GET['delete'])){
    
    $VID = $_GET['delete'];
    // echo($ID);
    $mysqli->query("DELETE FROM vet WHERE VID= $VID") or die($mysqli->error());
    header("location: vet.php");
}



?>