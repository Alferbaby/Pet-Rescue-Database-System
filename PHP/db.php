<?php
$db = mysqli_connect('localhost','tester','123456','project');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
</head>
<body>
<?php if($db) {?>
<div>Connected to database</div>
<?php }
?>
</body>
</html>
