<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1> <?php
    echo "Hello mohit";
    ?>
    </h1>

    <pre>
        <?php
            $x= 150;
            $y= 50;

            if($x>=$y){
                echo "Grater value= $x";
            }
            elseif($x== 50 or $y== 50){
                echo $x. "<br>";
                echo $y. "<br>";
                echo "Hello";
            }
            else{
                echo "Grater value= $y";
            }
        ?>
    </pre>

</body>
</html>