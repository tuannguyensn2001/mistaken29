<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 3</title>
   
</head>

<body>
<h1>Bảng cửu chương bằng for</h1>
<table cellspacing="5" cellpadding="10">

    <?php
    for ($i=1;$i<=10;$i++){
       echo "<tr>";
        for($j=2;$j<=9;$j++){
            echo "<td>";
            echo $j." x ".$i." = ". $i*$j;
            echo "</td>";
           
        }
        echo "</tr>";
    }

    ?>
    </table>
</body>
</html>