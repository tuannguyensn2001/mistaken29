<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 1</title>
</head>
<body>


<form  method="GET">
    <input type="text" name="a" value="" placeholder="Nhập a">
    <input type="text" name="b" value="" placeholder="Nhập b">
    <input type="text" name="c" value="" placeholder="Nhập c">
    <input type="submit" name="calc" value="Tính" />
    </form>
    <?php 
        if (!empty($_GET['calc']))
        {
            $a=isset($_GET['a']) ? $_GET['a'] : '';
            $b=isset($_GET['b']) ? $_GET['b'] : '';
            $c=isset($_GET['c']) ? $_GET['c'] : '';
        
        if ($a ==0){
            if ($b != 0 ) echo "Phương trình đã cho có nghiệm duy nhất x=".(-$c/$b);
            if ($b ==0 && $c ==0) echo "Phương trình đã cho vô số nghiệm";
            if ($b ==0 && $c !=0) echo "Phương trình đã cho vô nghiệm";
        } else{
            $denta1=($b*$b-4*$a*$c);
            if ($denta1 > 0){
                echo "Phương trình đã cho có 2 nghiệm phân biệt"."<br/>";
                echo " x1 = ".(-$b-sqrt($denta1))/(2*$a)."<br/>";
                echo " x2 = ".(-$b+sqrt($denta1))/(2*$a)."<br/>";
            }
            else if ($denta1 == 0){
                echo "Phương trình đã cho có nghiệm kép"."<br/>";
                echo "x1 = x2 = ".(-$b)/(2*$a);
            }
            else echo "Phương trình đã cho vô nghiệm";
        }
    }
    ?>
     
    

</body>
</html>