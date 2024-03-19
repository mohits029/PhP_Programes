<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test page</title>
</head>
<body>
    <h2>
<?php 
    echo "Hii this is Introduction about data types in php";
 ?>
 </h2>

 <p>
    <?php 

    $name= "Mohit sarkar";
    $salary= 5.4;
    echo "Hello world <br>";
    echo "<b> $name is the real gangstar <br> </b>";
    echo "$name 's Salary is $salary cr <br>";
    ?>
 </p>

 <p>

 <?php
    $myGFs= array("Neha", "Seema","Champa","Jyoti");
    echo var_dump($myGFs);
    echo "<br>";
    echo $myGFs[0];
 ?>
 </p>
</body>
</html>