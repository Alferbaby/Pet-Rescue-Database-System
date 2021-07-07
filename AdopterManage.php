<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->

     <link rel="stylesheet" href="./CSS/style.css" />

    <title>Adopter page!</title>
    </hedad>

    <body>
    <div class="row justify-content-center">
        <form action="process.php" method="POST">
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
                      color:#a0522d;" >Adopter Information</h1>
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


    <?php require_once 'process.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
                            <th>ID</th>
                            <th>Last_Name</th>
                            <th>First_Name</th>
                            <th>Address</th>
                            <th>PhoneNumber</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
            <?php
            $mysqli = new mysqli('localhost','root','root','project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM Adopter ") or die($mysqli->error);
            //pre_r($result);
            ?>

<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Last_Name']; ?></td>
                        <td><?php echo $row['First_Name']; ?></td>
                        <td><?php echo $row['Address']; ?></td>
                        <td><?php echo $row['PhoneNumber']; ?></td>
                        <td>
                            <!-- <a href="process.php? edit=<?php echo $row['ID']; ?>"
                               class="btn btn-info">Edit</a> -->
                            <a href="process.php?delete=<?php echo $row["ID"]; ?>"
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
        <form action="process.php" method="POST">

            <div class="form-group" style="text-align:center;" >
            <label>ID</label>
            <input type="text" Name="ID" style="text-align:center;"
                    class="form-control" placeholder="Enter your ID">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>Last_Name</label>
            <input type="text" name="Last_Name" class="form-control" 
                    placeholder="Enter your Last Name.">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>First_Name</label>
            <input type="text" name="First_Name" 
                   class="form-control" placeholder="Enter your first First Name">
            </div>
            <div class="form-group" style="text-align:center;">
            <label>Address</label>
            <input type="text" name="Address" 
                    class="form-control" placeholder="Enter your Address">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>PhoneNumber</label>
            <input type="text" name="PhoneNumber" 
                   class="form-control" placeholder="Enter your PhoneNumber">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">save</button>
            </div> 
            <br>
            <br>
            <br>


            <a href ="./AdopterUpdate.php"> Information Update </a>
            <div class="col"></div>
            <a href ="./EmerContact.php"> Find the Emergency Contact </a>
            <div class="col"></div>
            <a href ="./projectionAdopter.php"> Find Information By Type </a>
          
        </div>
        </from>
    </div>         
    </div>
    </body>
    </html>
