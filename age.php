<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->

     <link rel="stylesheet" href="./CSS/style.css" />

	<title>Search By Age</title>
</head>
<body>

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


<h1 style= "text-align: center;    
                      color:#a0522d;" >Search By Pet Ages</h1>
                      <br>
		      <br>
		      <br>


                        <!--  -->
<div class="row justify-content-center" >
<h2 style= "text-align: center;">Age</h2>
<form method="GET">

<select name="field" >
               <option value=">"> > </option> 
                <option value="=">=</option> 
               <option value="<"><</option> 
            </select>
  <label for="fname"></label><br>
  <input  type="text" name="age" value="<?php 
   if (isset($_GET['age'])) {
	echo($_GET['age']);
   } else {
	   echo('');
   }
    ?>" >
  <br/>
  
  <button name="ageget">Show All Pet</button><button name = "show">Show Adopter </button>

  </div>
  <div class="row justify-content-center" >
</form>




<?php




$ages = 0;
$operatorSign = ">=";


if (isset($_GET['show'])) {
	
	select();
 
}

function select() {
	$db = mysqli_connect('localhost','root','root','project');
	
$ages = $_GET['age'];
$operatorSign = $_GET['field'];
        $showName = true; 
	
	$sql2 = "SELECT pet.ChipID, pet.Name, pet.Age, pet.Description, adopter.First_Name, adopter.Last_Name,adopter.PhoneNumber
	FROM pet JOIN adoptedpet ON pet.chipID = adoptedpet.chipID JOIN adopter ON adoptedpet.AID = adopter.id 
	WHERE pet.Age $operatorSign '$ages'";

$result = $db->query($sql2);
echo "<table>";
echo "<tr><td> ChipID</td><td>Name</td><td>Age</td><td>Description</td><td>First Name</td><td>Last Name</td><td>PhoneNumber</td></tr>";
while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["ChipID"]."</td><td>".$row["Name"]."</td>
	<td>".$row["Age"]."</td><td>".$row["Description"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["PhoneNumber"]."</td><td>";
      }
     echo"</table>"; 
    }



   

   
$sql ="SELECT * FROM pet";
	
if( isset($_GET['ageget'])) {
	$db = mysqli_connect('localhost', 'root', 'root', 'project');
	$ages = $_GET['age'];
$operatorSign = $_GET['field'];
	$sql = "SELECT * FROM pet WHERE Age $operatorSign '$ages'";

	echo"<table>";
echo "<tr><th> ChipID</th><th>Name</th><th>Age</th><th>Description</th></tr>";
$result = $db->query($sql);
while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["ChipID"]."</td><td>".$row["Name"]."</td>
	<td>".$row["Age"]."</td><td>".$row["Description"]."</td>";
      }
     echo"</table>"; 





	
};




?>
</div>
</body>
</html>