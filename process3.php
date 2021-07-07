<?php

session_start();

$mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
// include 'connect.php';
// $conn   = OpenCon();
// $Name = '';
// $AID = 0;
// $phoneNumber = '';


if (isset($_POST['update'])){
   
    $ID =  $_POST['ID'];
    // $Last_Name =  $_POST['Last_Name'];
    // $Fisrt_Name =  $_POST['Fisrt_Name'];
    // $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $mysqli->query("UPDATE Adopter SET PhoneNumber='$PhoneNumber'  WHERE ID=$ID") or
    die($mysqli->error);     
    header("location: AdopterUpdate.php");

}
if (isset($_POST['update2'])){
   
    $ID =  $_POST['ID'];
    // $Last_Name =  $_POST['Last_Name'];
    // $Fisrt_Name =  $_POST['Fisrt_Name'];
    // $Address = $_POST['Address'];
    $Address = $_POST['Address'];
    $mysqli->query("UPDATE Adopter SET Address='$Address'  WHERE ID=$ID") or
    die($mysqli->error);     
    header("location: AdopterUpdate.php");

}

if (isset($_POST['update3'])){
    $ID =  $_POST['ID'];
    // $Last_Name =  $_POST['Last_Name'];
    // $Fisrt_Name =  $_POST['Fisrt_Name'];
    // $Address = $_POST['Address'];
    $First_Name = $_POST['First_Name'];
    $mysqli->query("UPDATE Adopter SET First_Name= '$First_Name'  WHERE ID=$ID") or
    die($mysqli->error);     
    header("location: AdopterUpdate.php");

}
if (isset($_POST['update4'])){
   
    $ID =  $_POST['ID'];
    // $Last_Name =  $_POST['Last_Name'];
    // $Fisrt_Name =  $_POST['Fisrt_Name'];
    // $Address = $_POST['Address'];
    $Last_Name = $_POST['Last_Name'];
    $mysqli->query("UPDATE Adopter SET Last_Name='$Last_Name'  WHERE ID=$ID") or
    die($mysqli->error);     
    header("location: AdopterUpdate.php");

}




?>