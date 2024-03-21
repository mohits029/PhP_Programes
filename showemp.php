<?php
// database connection
$server_name = "localhost";
$serve_userName = "root";
$server_password = "";
$database_name = "php_tuts";

$conn = mysqli_connect($server_name, $serve_userName, $server_password, $database_name);

if ($conn) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Database connection successfull</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
} else {
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
                        <a class="nav-link active" aria-current="page" href="/phptuts/ems.php/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>


                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    
        <table class="table table-success table-striped container mt-5">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">City</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            

        <?php

            $sql_update= "SELECT * FROM `employees_details` WHERE `City`='Sitarganj'";
            $sql_query = "SELECT * FROM `employees_details`";
            $sitarganj_result= mysqli_query($conn, $sql_update);
            $results= mysqli_query($conn, $sql_query);

            $row= mysqli_fetch_assoc($results);
            $sitarganj_row= mysqli_fetch_assoc($sitarganj_result);

            while($sitarganj_row!= null){
                echo "<h1>".$sitarganj_row['Name']."</h1> <br>";
                $sitarganj_row= mysqli_fetch_assoc($sitarganj_result);
            }

            while($row!= null){
                
                echo '
                <tr>
                    <th scope="row">'.$row['id'] .'</th>
                    <td>' . $row['Name'].'</td>
                    <td>'.$row['Email'].'</td>
                    <td>' .$row['City'].'</td>
                    <td>'.'<a href="">update</a>'.'</td>
                </tr>
                ';
                $row= mysqli_fetch_assoc($results);
            }

        ?>


        </tbody>
    </table>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>