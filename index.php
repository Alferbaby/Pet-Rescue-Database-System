<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <link rel="stylesheet" href="./CSS/style.css" />

    <title>Home page!</title>
  </head>
  <body>

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

    <div class="content">
      <div class="row align-items-start"><h1>Overview</h1></div>
      <div class="row align-items-start">
        <div class="col-3">
         
          <div
            class="card border rounded d-flex align-items-center"
            style="max-width: 250px; margin-top: 30px"
          >
            <h5 class="card-title navfont">Total Resuce</h5>
            <strong style="font-size: 50px">
            
            <?php 
  $db = mysqli_connect('localhost', 'root', 'root', 'project');
	



	$AggregationCount =
			"SELECT Count(*) AS TotalNum
			FROM  pet
		";
			
		$result = $db->query($AggregationCount);
    $row = mysqli_fetch_array($result);
    $titles = $row['TotalNum'];
		
	echo($titles);
		




		  
		    

?>

            
            
            </strong>
          </div>
        </div>

        <div class="col-9">
          <div
            class="card h-200 border rounded d-flex align-items-center"
            style="max-width: 864px; height: 519px"
          >
            <div class="row">
              <div class="col">
                <div
                  class="card bg-light mb-3 d-flex align-items-center"
                  style="max-width: 400px; height: 400px"
                >
                  <img
                    class="card-img"
                    src="http://www.petsworld.in/blog/wp-content/uploads/2014/09/cute-kittens.jpg"
                    alt="Card image"
                  />
                  <div class="card-text">
                    <span class="badge badge-warning">Urgent</span>
                  </div>
                 
                </div>
              </div>

              <div class="col">
                <div
                  class="card bg-light mb-3 d-flex align-items-center"
                  style="max-width: 400px; height: 400px"
                >
                  <img
                    class="card-img"
                    src="http://www.petsworld.in/blog/wp-content/uploads/2014/09/cute-kittens.jpg"
                    alt="Card image"
                  />
                  <div class="card-text">
                    <span class="badge badge-warning">Urgent</span>
                  </div>

                  <!-- Button trigger modal -->

                  

                  <!-- Modal -->
                  <div
                    class="modal fade"
                    id="exampleModal"
                    tabindex="-1"
                    aria-labelledby="exampleModalLabel"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">
                            About me
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body"></div>
                        <div class="modal-footer">
                          <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                          >
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col">
                <div
                  class="card bg-light mb-3 d-flex align-items-center"
                  style="max-width: 400px; height: 400px"
                >
                  <img
                    class="card-img"
                    src="http://www.petsworld.in/blog/wp-content/uploads/2014/09/cute-kittens.jpg"
                    alt="Card image"
                  />
                  <div class="card-text">
                    <span class="badge badge-success">New</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html>