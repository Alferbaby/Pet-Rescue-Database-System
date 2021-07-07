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
        <form action="processRecord.php" method="POST">
            <div class="form-group">

    <br>
    <br>
    <br>
<h1 style= "text-align: center;    
                      color:#a0522d;" >Medical Record </h1>
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


    <?php require_once 'processRecord.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
			    <th>MID</th>
                            <th>VID</th>
                            <th>Description</th>
			    <th>Vaccine_status</th>
			    <th>Sterilization_status</th>
                        </tr>
                    </thead>
            <?php
            $mysqli = new mysqli('localhost','root','root','project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM medicalrecord_manage ") or die($mysqli->error);
            //pre_r($result);
            ?>

<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['MID']; ?></td>
			<td><?php echo $row['VID']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Vaccine_status']; ?></td>
			<td><?php echo $row['Sterilization_status']; ?></td>
                        <td>
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
          
        </div>
        </from>
    </div>         
    </div>
    </body>
    </html>