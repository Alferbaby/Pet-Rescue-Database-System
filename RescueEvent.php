<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->

     <link rel="stylesheet" href="./CSS/style.css" />

    <title>Emergency Contact</title>
    </hedad>

    <body>
    <div class="row justify-content-center">
        <form action="process4.php" method="POST">
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
                      color:#a0522d;" >Rescue Event</h1>
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

    <a href ="./divisionQuery.php"> Place that have the most rescue </a>


    <?php require_once 'process4.php'; ?>
    <div class="container">
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
                            <th>Location</th>
                            <th>PostalCode</th>
                            <th>Date</th>
                            <!-- <th>Description</th> -->
                            <th>Daily_Rescue_Amount</th>
                            <!-- <th colspan="2">Action</th> -->
                        </tr>
                    </thead>
            <?php
            $mysqli = new mysqli('localhost','root','root','project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT RescueEvent.Location,  RescueEvent.PostalCode, RescueEvent.Date, Date_DailyRescue.Daily_Rescue_Amount
            FROM RescueEvent  INNER JOIN Date_DailyRescue ON  RescueEvent.Date = Date_DailyRescue.Date") or die($mysqli->error);
            //pre_r($result);
            ?>

<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Location']; ?></td>
                        <td><?php echo $row['PostalCode']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
                        <td><?php echo $row['Daily_Rescue_Amount']; ?></td>
                        <td>
                            <!-- <a href="process.php? edit=<?php echo $row['ID']; ?>"
                               class="btn btn-info">Edit</a> -->
                            <!-- <a href="process4.php?delete=<?php echo $row[""]; ?>"
                               class="btn btn-danger">Delete</a> -->
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
    
    <!-- <div class="row justify-content-center" >
        <form action="process4.php" method="POST">

            <div class="form-group" style="text-align:center;" >
            <label>ID</label>
            <input type="text" name="ChipID" style="text-align:center;"
                    class="form-control" placeholder="Enter your ChipID">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>Last_Name</label>
            <input type="text" name="Name" class="form-control" 
                    placeholder="Enter your Name.">
            </div>

            <div class="form-group" style="text-align:center;">
            <label>Age</label>
            <input type="text" name="Age" 
                   class="form-control" placeholder="Enter your first Age">
            </div>
            <div class="form-group" style="text-align:center;">
            <label>Description</label>
            <input type="text" name="Description" 
                    class="form-control" placeholder="Enter your Description">
            </div>

            <!-- <div class="form-group" style="text-align:center;">
            <label>PhoneNumber</label>
            <input type="text" name="PhoneNumber" 
                   class="form-control" placeholder="Enter your PhoneNumber">
            </div>
             -->
            <!-- <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">save</button>
            </div>  -->
            <br>
            <br>
            <br>


            
           
        </div>
        </from>
    </div>        
    </div>
    </body>
    </html>