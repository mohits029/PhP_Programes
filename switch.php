<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
    
<h1>
    <?php
        echo "Switch case tutuoral";
    ?>
</h1>

<?php
    $age= 99;

    switch($age){
        case 12:
            echo "Your age is $age";
            break;
        case 24:
            echo "Your age is $age";
            break;
        case 99:
            echo "Aaap to centurey marne wale ho bhid ";
            break; 
        default:
            echo "Default hu main";

    }
?>


</body>
</html>