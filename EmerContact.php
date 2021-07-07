<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet"  href="CSS/custom.css">   
     <link rel="stylesheet" href="./CSS/style.css" />
     <title>Vet page!</title>
    </hedad>

    <body>
    <br>
    <br>
<h1 style= "text-align: center;    
                      color:#a0522d;" >Emergency Contact</h1>
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


    <?php require_once 'process2.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
                            <th>Name</th>
                            <th>AID</th>
                            <th>phoneNumber</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
            <?php
            $mysqli = new mysqli('localhost', 'root', 'root', 'project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM EmergencyContact_IsAsscociated ") or die($mysqli->error);
            //pre_r($result);
            ?>
<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['AID']; ?></td>
                        <td><?php echo $row['phoneNumber']; ?></td>
                        <td>
                            <!-- <a href="process2.php? edit=<?php echo $row['AID']; ?>"
                               class="btn btn-info">Edit</a> -->
                            <a href="process2.php? delete=<?php echo $row["AID"]; ?>"
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
    
    <div class="row justify-content-center">
        <form action="process2.php" method="POST">

            <div class="form-group">
            <label>Name</label>
            <input type="text" Name="Name" 
                   value="<?php if (isset($Name)) {echo $Name;} ?>" class="form-control" placeholder="Enter your name">
            </div>

            <div class="form-group">
            <label>AID</label>
            <input type="number" name="AID" class="form-control" 
                   value="<?php if (isset($AID)) {echo $AID;} ?>" placeholder="Enter your related adopter id.">
            </div>

            <div class="form-group">
            <label>PhoneNumber</label>
            <input type="text" name="phoneNumber" 
                   value="<?php if (isset($phoneNumber)) {echo $phoneNumber;} ?>" class="form-control" placeholder="Enter your first PhoneNumber">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">save</button>
            </div>
        </from>
    </div>
    </div>
    </body>
