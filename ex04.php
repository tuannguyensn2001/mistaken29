<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 4</title>
</head>
<body>
    <?php
    $arr=array(1,4,2,6,9,100,45,8,20);
    $max=$arr[0];
    foreach($arr as $index){
        if ($max < $index){
            $max=$index;
        }
    }
    echo $max;



    ?>
</body>
</html>