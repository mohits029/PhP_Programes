<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
    <h1>Database Connection</h1>

    <?php
        // connecting database
        $server_name= "localhost";
        $user_name= "root";
        $password= "";

        $conn= mysqli_connect($server_name, $user_name, $password);

        if($conn){
            echo "Database Connection Successfull";
        }
        else{
            echo "Database is not connected";
        }
    ?>
    
</body>
</html>