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
      Ngay: <input type="input" name="day"><br><br>
      Thang: <input type="input" name="month"><br><br>
      Nam: <input type="input" name="year"><br><br>
      <input type="submit" value="Tong" name="Submit">
    </form>
    <?php
        if(isset($_GET['Submit']) && ($_GET['Submit']=="Tong") ) {
            $d = $_GET['day'];
            $m = $_GET['month'];
            $y = $_GET['year'];
            $sumday =0;
            for ($i=1; $i < $m; $i++) { 
                switch ($i) {
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                    case 12:
                        $sumday += 31;
                        break;
                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        $sumday += 30;
                        break;
                    default:
                        if (($y % 4 == 0 && $y % 100 != 0) || $y % 400 == 0) {
                            $sumday += 29;
                        } 
                        else
                            $sumday += 28;
                }
            }
            $sumday+= $d;
            echo "Số ngày từ đầu năm là". $sumday. "<br>";
        }
    ?>
    </div>
</body>
</html>