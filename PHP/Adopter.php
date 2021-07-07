<?php
$db = mysqli_connect('localhost','tester','123456','project');
?>

<!DOCTYPE html>
<html>
<h1>Adopter List</h1>
<table border="1" cellpadding="5" cellsapcing="0">
        <tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <th>Phone Number</th>
        </tr>
    <?php
    $sql = "SELECT ID, Last_Name, First_Name, Address, PhoneNumber from Adopter";
    $result = $db->query($sql);
    if($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["ID"]."</td><td>".$row["Last_Name"]."</td><td>" .$row["First_Name"]. "</td><td>" .$row["Address"]. "</td><td>" .$row["PhoneNumber"]
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

<form action = "addAdopter.php" method = "POST">
    Adopter ID: <input type = "text" name="ID">
    Last Name: <input type = "text" name = "Last_Name">
    First Name: <input type = "text" name = "First_Name">
    Description: <input type = "text" name = "Address">
    Phone Number: <input type = "text" name = "PhoneNumber">
    <input type = "submit" name = "insert" value="Create new Adopter">
</form>


</body>


</html>
