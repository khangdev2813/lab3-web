<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
    <form method="get" action="#">
      Hệ số a<input type="input" name="a"><br><br>
      Hế số b<input type="input" name="b"><br><br>
      Hệ số c<input type="input" name="c"><br><br>
      <input type="submit" value="Giai" name="Submit">
    </form>
    <?php
        if(isset($_GET['Submit']) && ($_GET['Submit']=="Giai") ) {
            $a = (float) $_GET['a'];
            $b = (float) $_GET['b'];
            $c = (float) $_GET['c'];
            if ($a != 0) {
                $d = $b * $b - 4 * $a * $c;
                if ($d > 0) {
                    $x1 = (-$b + sqrt($d)) / (2 * $a);
                    $x2 = (-$b - sqrt($d)) / (2 * $a);
                    echo "x1 = " . $x1 . "<br>";
                    echo "x2 = " . $x2 . "<br>";
                } else {
                    if ($d == 0){
                        $x1 = -$b / (2 * $a);
                        echo "x1 = x2 = " . $x1 . "<br>";
                    } else { 
                            echo "Không có giá trị nghiệm";
                    }
                }
            } else {
                echo " Không phải pt bậc 2";
            }
            
        }
    ?>
    </div>
</body>
</html>