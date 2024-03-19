<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Function</title>
</head>
<body>
    <h1>This is introduction about date function in php</h1>

    <?php
        $d= date("d-m-Y");
        echo $d;
    ?>

    <h2>
        <?php
        $x= 34;
        $today= date("d-m-Y");
        echo "Today is ";
        echo $today;
        ?>
        
    </h2>


    <?php
        $arr1= array(
            "Mohit" => "Neha",
            "Pankaj"=> "Pinky",
            1 => "Priya",
            2=> 4
        );

        foreach ($arr1 as $key => $val){
            echo "$key loves $val <br>";
        }
    ?>

</body>
</html>