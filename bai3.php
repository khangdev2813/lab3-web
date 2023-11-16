<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php 
    $ban=array("Tuấn"=>21,"Tú"=>19,"Tâm"=>22,"Tùng"=>20);
    function get20YearsOld($arr) {
        foreach ($arr as $key => $value) {
            if ($value > 20) echo $key . " " . $value . "<br>";
        }
    }

    function sortArr(&$arr) {
       asort($arr);
    }

    function addArr(&$arr,$value) {
        array_push($arr,$value);
    }

    function findYOr($arr,$yo) {
        foreach ($arr as $key => $value) {
            if ($value == $yo) echo $key . " " . $value . "<br>";
        }
    }

    function DeleteName(&$arr,$name) {
        unset($array[$name]);
    }
?>
<body>
    <div class="container">

    <form method="get" action="#">
      Nhập tên cần tìm: <input type="input" name="name"><br><br>
      <input type="submit" value="Tim" name="Submit">
      
    </form>
    <?php
        if(isset($_GET['Submit']) && ($_GET['Submit']=="Tim") ) {
            $name = $_GET['name'];
            if (array_key_exists($name, $ban)) {
                echo "Tìm thấy ". $name ." trong mảng\n";
                echo "<h3>Xuất mảng</h3>";
                foreach ($ban as $key => $value) {
                    echo $key . " " . $value . "<br>";
                }
            } else {
                echo "Không tìm thấy ". $name ." trong mảng <br>";
            }

            echo "<br> tuoi > 20 <br>";
            get20YearsOld($ban);
            echo "<br> tuoi sort <br>";
            sortArr($ban);
            foreach ($ban as $key => $value) {
                echo $key . " " . $value . "<br>";
            }

        }
    ?>
    </div>
</body>
</html>