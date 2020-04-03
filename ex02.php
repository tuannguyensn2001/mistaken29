<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
</head>
<body>
<form action="" method="GET">
<input type="text" name="n" placeholder="Nhập n">
<input type="submit" name="calc" value="Tính">
</form>
    <?php
    if (!empty($_GET['calc'])){
    $n=isset($_GET['n']) ? $_GET['n'] : '';
    $S=0;
    $k=1;
    for ($i=1;$i<=$n;$i++){
        $k*=$i;
        $S+=$i/$k;
    }
    echo $S;
    }

    ?>

</body>
</html>