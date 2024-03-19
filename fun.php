<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Example</title>
</head>
<body>
<h1>This is function example</h1>

<?php
    function avarageCal($arr1){
        $sum= 0;
        foreach ($arr1 as $val){
            $sum+= $val;
        }
        return $sum;
    }

    $arr1= [23,4,53,2,55];
    $arr2= array(12,13,14,15);
    echo "Hello this is sum: ".avarageCal($arr1);

?>
    
</body>
</html>