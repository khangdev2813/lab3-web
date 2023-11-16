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
    <?php
        if(isset($_GET['Submit']) && ($_GET['Submit']=="Tinh") ) {
            $dai = $_GET['chieudai'];
            $rong = $_GET['chieurong'];
            $dientich= (float) $dai * (float) $rong;
            $chuvi = ((float) $dai+(float) $rong)*2;
            echo "Diên tich:". $dientich. "<br>";
            echo "Chu vi:".$chuvi;
        }
    ?>
    <form method="get" action="#">
      <input type="input" name="chieudai"><br><br>
      <input type="input" name="chieurong"><br><br>
      <input type="submit" value="Tinh" name="Submit">
    </form>
    </div>
</body>
</html>