<!-- Find postalCode_City_Province(pc)  such that There is no Date_DailyRescue (d) Which has no RescueEvent(re) -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="./CSS/style.css" />

	<title>Show all postal code with rescue event</title>
</head>
<body>
<br>
<h1 style= "text-align: center;    
                      color:#a0522d;" >Show all postal code with rescue event</h1>
                      <br>
                      <br>
                      <br>
                      <div class="nav">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active navfont" href="./index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navfont" href="./AdopterManage.php">Adopter</a>
        </li>
        <li class="nav-item">
	<a class="nav-link navfont" href="./Pet.php">Pet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navfont" href="./vet.php">Vet</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navfont" href="./MedicalRecord.php">Medical Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navfont" href="./RescueEvent.php">Resuce Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link navfont" href="./About.php">About</a>
        </li>
      </ul>
    </div>
      </ul>
    </div>

<div class ="row justify-content-center">
<h3>Postal Code Related With All Date(Place that have Rescue Event every day.)</h3>
<form method="GET">

<select name="field1">
               <option value="postalCode_City_Province"> postalCode_City_Province </option> 
            </select>
 <select name="field2">
               <option value="Date_DailyRescue"> Date_DailyRescue </option> 
            </select>
<select name="field3">
               <option value="RescueEvent"> RescueEvent </option> 
            </select>
  <label for="fname"></label><br>

  <button name="disply">Show All Postal Code</button>
  <p>Currently, we only have one possible division query: Find Postal Code in postalCode_City_Province(pc)  such that There is no Date_DailyRescue (d) Which has no RescueEvent(re).</p>
</form>
</div>


<div class ="row justify-content-center">
<div >
<?php

// echo('Currently, we only have one possible division query: Find Postal Code in postalCode_City_Province(pc)  such that There is no Date_DailyRescue (d) Which has no RescueEvent(re):
// ');


$ages = 0;
$object = '';
$related_1 ='';
$related_2 = '';


if (isset($_GET['disply'])) {
	
	select();
 
}

function select() {
	$db = mysqli_connect('localhost', 'root', 'root', 'project');
	
$object = $_GET['field1'];
$related_1 = $_GET['field2'];
$related_2 = $_GET['field3'];

        $showName = true; 

    $sql1 = "SELECT PostalCode  FROM $object  WHERE NOT EXISTS (SELECT * from $related_1
    WHERE NOT EXISTS (SELECT $object.PostalCode FROM $related_2
     WHERE $object.PostalCode=$related_2.PostalCode AND $related_1.Date=$related_2.Date))";

$result = $db->query($sql1);


while($row = $result->fetch_assoc()) {
    echo"<table>";
       echo" <tr><td>".$row["PostalCode"]."</td></tr> ";
        // echo ($row['PostalCode']);
    }
}
// echo"<table>";
// // echo" <tr><td>".$row["ChipID"]."</td></tr> ";
// echo('Currently, we only have one possible division query: Find Postal Code in postalCode_City_Province(pc)  such that There is no Date_DailyRescue (d) Which has no RescueEvent(re):
// ');

?>
</div>
</div>
</body>
</html>