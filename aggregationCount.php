
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<h3>Total Number Of</h3>  
<form method="GET">

<select name="field">
               <option value="Cat"> Cat </option> 
                <option value="Dog"> Dog</option> 
               <option value="Other"> Other </option> 
            </select>
  <label for="fname"></label><br>

  <button name="ageget">Show All Pet</button>
</form>


  <?php 
  $db = mysqli_connect('localhost', 'root', 'root', 'project');
	

	$Species = $_GET['field'];

	$AggregationCount =
			"SELECT SName AS Species,Count(*) AS TotalNum
			FROM  pet_isof 
			WHERE SName = '$Species'
			GROUP BY SName";
			
		$result = $db->query($AggregationCount);

		
			echo" <hr/>";
			echo "<table>";
	echo "<tr><th> Species </th><th>Total Rescue</th></tr>";
			while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["Species"]."</td><td>".$row["TotalNum"]."</td><td>";
		      }
		     echo"</table>";
		




		  
		    

?>

</body>
</html>