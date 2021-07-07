<?php
$db = mysqli_connect('localhost','tester','123456','project');
?>

<!DOCTYPE html>
<html>
<body>
<h1>Staff List</h1>
<table border="1" cellpadding="5" cellsapcing="0">
        <tr>
            <th>Staff ID</th>
            <th>Last Name</th>
            <th>First Name</th>
        </tr>
    <?php
    $sql = "SELECT SID, Last_Name, First_Name from Staff";
    $result = $db->query($sql);
    if($result -> num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" .$row["SID"] ."</td><td>" .$row["Last_Name"] . "</td><td>" .$row["First_Name"]."</td></td>";
        }
        echo "</table>";
    } else {
       echo "0 result";
    }
    $result->close();
    ?>

</table>


<form action = "addStaff.php" method = "POST">
    Staff ID: <input type = "text" name="SID">
    Last Name: <input type = "text" name = "Last_Name">
    First Name: <input type = "text" name = "First_Name">
    <p>
    <input type = "submit" name = "insert" value="Create a new Staff">
    </p>
</form>
<form action = "updateStaff.php" method = "POST">
    Staff ID: <input type = "text" name="SID">
    Last Name: <input type = "text" name = "Last_Name">
    First Name: <input type = "text" name = "First_Name">
    <p>
        <input type = "submit" name = "update" value = "update value"/>
    </p>
</form>





</html>
