<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->

     <link rel="stylesheet" href="./CSS/style.css" />

    <title>Vet page!</title>
    </hedad>

    <body>
    <div class="row justify-content-center">
        <form action="processvet.php" method="POST">
            <div class="form-group">
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->
    </hedad>

    <body>
    <br>
    <br>
    <br>
<h1 style= "text-align: center;    
                      color:#a0522d;" >Vet Information</h1>
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


    <?php require_once 'processvet.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
                            <th>VID</th>
                            <th>Name</th>
                            <th>Specialization</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
            <?php
            $mysqli = new mysqli('localhost','root','root','project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM Vet ") or die($mysqli->error);
            //pre_r($result);
            ?>

<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['VID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Specialization']; ?></td>
                        <td>
                            <!-- <a href="processvet.php? edit=<?php echo $row['VID']; ?>"
                               class="btn btn-info">Edit</a> -->
                            <a href="processvet.php?delete=<?php echo $row["VID"]; ?>"
                               class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
            </div>
            
            <?php
            
            function pre_r( $array ) {
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
        ?>
    
    <div class="row justify-content-center" >
        <form action="processvet.php" method="POST">

            <div class="form-group" style="text-align:center;" >
            <label>VID</label>
            <input type="text" Name="VID" style="text-align:center;"
                    class="form-control" placeholder="Enter your VID">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>Name</label>
            <input type="text" name="Name" class="form-control" 
                    placeholder="Enter your Name.">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>Specialization</label>
            <input type="text" name="Specialization" 
                   class="form-control" placeholder="Enter your Specialization">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">save</button>
            </div> 
            <br>
            <br>
            <br>

	    
        </div>
        </from>
<a href ="./NestedGroupBy.php"> Search by Specialization </a>

    </div>         
    </div>
    </body>
    </html>
