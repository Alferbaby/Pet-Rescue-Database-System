<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <!-- <link rel="stylesheet" <?php echo $templateDirectory; ?> href="CSS/custom.css">    -->

     <link rel="stylesheet" href="./CSS/style.css" />

    <title>Page Information!</title>
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
<h1 style= "text-align: center;    
                      color:#a0522d;" >Pet Information</h1>
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

    <?php require_once 'process4.php'; ?>
    <div class="container">
    <br>
    <br>
    <div class="row justify-content-center">
            <table class="table">
                    <thead>
                        <tr> 
                            <th>ChipID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Description</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <br>
    <br>
            <?php
            $mysqli = new mysqli('localhost','root','root','project') or die(mysqli_error($mysqli));
            $result = $mysqli->query("SELECT * FROM Pet ") or die($mysqli->error);
            //pre_r($result);
            ?>

<?php
            while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['ChipID']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Age']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td>
                            <!-- <a href="process.php? edit=<?php echo $row['ID']; ?>"
                               class="btn btn-info">Edit</a> -->
                            <a href="process4.php?delete=<?php echo $row["ChipID"]; ?>"
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
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">save</button>
            </div> 
            <br>
            <br>
            <br>
        </div>
        </from>

        <a href ="./age.php"> Search by Ages </a>
<div></div>
        <a href ="./aggregationCount.php"> Total Rescue By Species </a>

    </div>  



    </div>



</div>




    </body>
    </html>