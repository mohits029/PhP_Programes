<?php
    // database connection
    $server_name= "localhost";
    $serve_userName= "root";
    $server_password= "";
    $database_name= "php_tuts";

    $conn= mysqli_connect($server_name, $serve_userName, $server_password, $database_name);

    if($conn){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Database connection successfull</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>'; 
    }
    else{
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Database not connected</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>'; 
    }

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Employee Management System</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">EMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/phptuts/showemp.php/">Show-Employee</a>
                    </li>
                    
                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <?php 
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $user_name= $_POST["u_name"];
            $user_email= $_POST["u_email"];
            $user_email= $_POST["u_email"];
            $user_address= $_POST["u_address"];
            $user_city= $_POST["u_city"];
            $user_state= $_POST["u_state"];
            $user_zip= $_POST["u_zip"];

            // sql query to insert data into database
            $myquery= "INSERT INTO `employees_details` (`Name`, `Email`, `Address`, `City`, `State`, `Zip`) 
            VALUES ('$user_name', '$user_email', '$user_address', '$user_city', '$user_state', '$user_zip')";

            mysqli_query($conn, $myquery);

            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Employee Add Successfully</strong> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

            
        }


    ?>

    <div class="container mt-5">
        <form action="/phptuts/ems.php/" method="POST" class="row g-3 pb-5">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Name</label>
                <input type="text" class="form-control" id="inputEmail4" name="u_name">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputPassword4" name="u_email">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="u_address">
            </div>
            
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="u_city">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" name="u_state" class="form-select" >
                    <option selected>Choose...</option>
                    <option>Roorkee</option>
                    <option>Dehradun</option>
                    <option>Haldwani</option>
                    <option>Rudrapur</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Zip</label>
                <input type="text" class="form-control" id="inputZip" name="u_zip">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Add Employee</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>