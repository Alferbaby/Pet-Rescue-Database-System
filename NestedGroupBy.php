<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link rel="stylesheet" href="./CSS/style.css" />

<title>Search by Specialization !</title>

</head>
<body>
<br>
<br>
<h1 style= "text-align: center;    
                      color:#a0522d;" >Search By Vet Specialization </h1>
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




  
   
    <div class="row justify-content-center" >


    
<h3>Number of animals diagnosis </h3>

<form method="GET">

<select name="field">
               <option value=">"> > </option> 
                <option value="=">=</option> 
               <option value="<"><</option> 
            </select>
           
         
  <label for="fname"></label>
 
 
  <input  type="text" name="record"></input>
 


  </div>



	     <div class="row  justify-content-center">
	<h3>Specialization</h3>
<form method="GET">

  <label for="fname"></label>
  <input  type="text" name="spe"> </input>
  <button name="ageget">Show All Pet</button>
  </div>














<div class="row justify-content-center">
  <?php 

$operatorSign = ">=";
$Spes = NULL;
$records = 0;

$db = mysqli_connect('localhost', 'root', 'root', 'project');
   if (isset($_GET['spe'])) {
	$records = $_GET['record'];
$Spes = $_GET['spe'];
$operatorSign = $_GET['field'];
   } else {
	   echo('');}
   
	   ?>


	   <br/>


	   <?php
	   


$sql2 = " SELECT vet.VID, vet.Name, vet.Specialization,Count(medicalrecord_manage.VID) AS recordper
FROM vet JOIN medicalrecord_manage ON vet.VID = medicalrecord_manage.VID
Where vet.Specialization IN (
SELECT vet.Specialization 
FROM vet
WHERE vet.Specialization LIKE '$Spes%' )
GROUP BY vet.VID
HAVING recordper $operatorSign $records ";

	
$result = $db->query($sql2);
echo"<table>";
echo "<tr><th> VID</th><th>Name</th><th>Specialization</th><th>recordper</th></tr>";
while($row = $result->fetch_assoc()) {
	echo "<tr><td>".$row["VID"]."</td><td>".$row["Name"]."</td>
	<td>".$row["Specialization"]."</td><td>".$row["recordper"]."</td><td>";
      }
     echo"</table>"; 
    
?>
  </div>

</body>
</html>
