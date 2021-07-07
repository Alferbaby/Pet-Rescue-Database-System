<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $VID = 0;
// $Name = '';
// $Specialization = '';
if (isset($_POST['save'])){
   
    $MID =  $_POST['MID'];
    $VID =  $_POST['VID'];
    $Description =  $_POST['Description'];
    $Vaccine_status =  $_POST['Vaccine_status'];
    $Sterilization_status = $_POST['Sterilization_status'];
    $mysqli->query("INSERT INTO vet (MID,VID,Description,Vaccine_status,Sterilization_status) 
    VALUES('$MID', '$VID', '$Description','$Vaccine_status','$Sterilization_status')") or
    die($mysqli->error);     
    header("location: MedicalRecord.php");

}


