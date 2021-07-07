<?php
$db = mysqli_connect('localhost','tester','123456','project');
?>

<!DOCTYPE html>
<html>
<h1>Pet List</h1>
<table border="1" cellpadding="5" cellsapcing="0">
        <tr>
            <th>Chip ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Description</th>
        </tr>
    <?php
    $sql = "SELECT ChipID, Name, Age, Description from pet";
    $result = $db->query($sql);
    if($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["ChipID"]."</td><td>".$row["Name"]."</td><td>" .$row["Age"]. "</td><td>" .$row["Description"]
                ."</td></td>";
        }
        echo "</table>";
    } else {
       echo "0 result";
    }
    $result->close();
    ?>

</table>

<body>

<form action = "addPet.php" method = "POST">
    Chip ID: <input type = "text" name="chipID">
    Name: <input type = "text" name = "Name">
    Age: <input type = "text" name = "age">
    Description: <input type = "text" name = "Description">
    <input type = "submit" name = "insert", value="Add new Pet">
</form>


</body>


</html>
