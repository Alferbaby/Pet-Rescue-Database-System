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
<form method="GET">

<select name="field">
               <option value="Address"> Address</option> 
                <option value="PhoneNumber">PhoneNumber</option> 
            </select>


  <label for="fname"></label><br>
  <!-- <input  type="text" name="age" value="<?php 
   if (isset($_GET['age'])) {
	echo($_GET['age']);
   } else {
	   echo('');
   }
    ?>" > -->
  <br/>
  
  <button name="inforget">Display</button>
  <!-- <button name = "show">Show Adopter </button> -->


</form>




<?php




$option = "";



if (isset($_GET['inforget'])) {
	
	select();
 
}

function select() {
	$db = mysqli_connect('localhost', 'root', 'root', 'project');
	
// $option = $_GET['inforget'];
// echo ($option);
$option = $_GET['field'];
        $showName = true; 


        if ($option == 'Address'){
	//  echo ($option);
	$sql2 = "SELECT Adopter.ID,Adopter.Last_Name , Adopter.First_Name, Adopter.Last_Name,Adopter.Address FROM Adopter ";
	

$result = $db->query($sql2);









 
echo"<table>";
// echo "</th><td> ID</th><td>Last_Name</td><td>First_Name</td><td>Address</td></tr>";
while($row = $result->fetch_assoc()) {
	echo "<tr>
	<td>".$row["ID"]."</td><td>".$row["Last_Name"]."</td><td>".$row["First_Name"]."</td><td>".$row["Address"]."</td><td>";
      }
     echo"</table>"; 
    }

else if($option == 'PhoneNumber'){
    // echo ($option);
	$sql2 = "SELECT Adopter.ID,Adopter.Last_Name , Adopter.First_Name, Adopter.Last_Name,Adopter.PhoneNumber FROM Adopter ";
	

$result = $db->query($sql2);
echo"<table>";
// echo "<tr><th> ID</th><th>Last_Name</th><th>First_Name</th><th>PhoneNumber</th></tr>";
while($row = $result->fetch_assoc()) {
	echo "<tr>
	<td>".$row["ID"]."</td><td>".$row["Last_Name"]."</td><td>".$row["First_Name"]."</td><td>".$row["PhoneNumber"]."</td>";
      }
     echo"</table>"; 
    }
}
   

   
// $sql ="SELECT * FROM Adopter";
	
// if( isset($_GET['ageget'])) {
// 	$db = mysqli_connect('localhost', 'root', '121314lcsP', 'petRe');
// 	// $ages = $_GET['age'];
// $operatorSign = $_GET['field'];
// 	$sql = "SELECT * FROM pet WHERE Age $operatorSign '$ages'";

// 	echo"<table>";
// echo "<tr><th> ChipID</th><th>Name</th><th>Age</th><th>Description</th></tr>";
// $result = $db->query($sql);
// while($row = $result->fetch_assoc()) {
// 	echo "<tr><td>".$row["ChipID"]."</td><td>".$row["Name"]."</td>
// 	<td>".$row["Age"]."</td><td>".$row["Description"]."</td>";
//       }
//      echo"</table>"; 





	
// };











?>
</body>
</html>