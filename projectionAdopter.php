<!DOCTYPE html>
<html lang="en">



<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Adopter Info Quick View</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->
</head>


<body>

<h3>Adopter Info Quick View</h3>
<form method="GET" action="projectionAdopter.php">
        <input type="hidden" id="requestProjection" name="requestProjection">
        ID: <input type="checkbox" name="option0"> <br /><br />
        Last_Name: <input type="checkbox" name="option1"> <br /><br />
        First_Name: <input type="checkbox" name="option2"> <br /><br />
        Address: <input type="checkbox" name="option3"> <br /><br />
        PhoneNumber: <input type="checkbox" name="option4"> <br /><br />


        <button name="projection">projection</button></p>
    </form>



<?php
// echo ($_GET['option0']);
// echo ($_GET['option1']);
// echo ($_GET['option2']);
// echo ($_GET['option3']);
// echo ($_GET['option4']);



if (isset($_GET['projection'])) {
 
   select();
 
}

function select() {
    // echo('dd');
    $mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
    $list =array();
	$q ="Select ";
    $proList = array();
    if (isset($_GET['option0'])) {
        array_push($proList, 'ID, ');
        array_push($list, 'ID');
    }else{
        error_reporting();
    }
    if (isset($_GET['option1'])) {
        array_push($proList, 'Last_Name, ');
        array_push($list, 'Last_Name');
    }else{
        error_reporting();
    }
    if (isset($_GET['option2'])) {
        array_push($proList, 'First_Name, ');
        array_push($list, 'First_Name');
    }else{
        error_reporting();
    }
    if (isset($_GET['option3'])) {
        array_push($proList, 'Address, ');
        array_push($list, 'Address');
    }else{
        error_reporting();
    }
    if (isset($_GET['option4'])) {
        array_push($proList, 'PhoneNumber, ');
        array_push($list, 'PhoneNumber');
    }else{
        error_reporting();
    }
    // echo('dd');
    foreach ($proList as $p){
        $q = $q . $p;
    }
    $q =substr($q,0,-2);
    $q = $q . " From Adopter";
    if (count($list) == 0){
        $q = "Select * From Adopter";
        }

        // echo($q);
 
    $result =  $mysqli->query($q);
    echo"<table>";
    // echo "<tr><th> ID</th><th>Last_Name</th><th>First_Name</th><th>PhoneNumber</th></tr>";
    echo "<br>Retrieved data from table Adopter:<br>";
        echo "<table>";
        echo "<tr>";
        foreach ($list as $l) {
            echo "<th>$l</th>";
        }
        echo "</tr>";
        // echoHelper ($list);
        while ($row = $result->fetch_assoc()) {

            if(count($list)==0){
                echo('nothing to display');
            }else

            $curr = "<tr><td>";
            foreach ($list as $l) {
                $curr =  $curr. $row[$l]. "</td><td>";
            }
            // $curr = $curr. "</td><td>";
            echo $curr;
   
        }
        

        echo "</table>";
    
}

?>
</body>
</html>