<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management system</title>
</head>
<body>

<h1>Hello world</h1>
<?php
    // connecting database
    $serverName= "localhost";
    $userName= "root";
    $password= "";
    $databaseName= "php_tuts";

    $conn= mysqli_connect($serverName, $userName, $password, $databaseName);
    if($conn){
        echo "Database Connection Successfull <br>";

        $sql= "INSERT INTO `employees` (`Name`, `Email`, `Salary`) VALUES ('Rohit Sarkar', 'Rohit44@gmail.com', '4500')";
        $result= mysqli_query($conn,$sql);

        if($result){
            echo "Inserted Succssfully";
        }
        else{
            echo "Not inserted successfully";
        }

    }
    else{
        echo "Database is not connected";
    }
?>
    
</body>
</html>