<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<?php


    abstract class Hinh
    {
    // Các thuộc tính
    public $dai;
    public $rong;
    public $cao;


    // Phương thức khởi tạo
    public function __construct($d,$r,$c)
    {
        $this->dai = $d;
        $this->rong = $r;
        $this->cao = $c;
    }

    // Phương thức tính chu vi
    public abstract function tinhTheTich();

    // Phương thức tính diện tích
    public abstract function tinhDienTich();
    }



    class HinhLapPhuong extends Hinh
    {


        public function __construct($d,$r,$c)
        {
           parent::__construct($d,$r,$c);
        }

    
        public function tinhDienTich()
        {
            return ($this->dai * $this->rong  + $this->dai * $this->cao + $this->cao * $this->rong) * 2;
        }


        public function tinhTheTich()
        {
            return $this->dai * $this->rong * $this->cao;
        }
    }
?>
<body>
    <div class="container">
    <form method="get" action="#">
      Chiều dài:<input type="input" name="chieudai"><br><br>
      Chiều rộng<input type="input" name="chieurong"><br><br>
      Chiều cao<input type="input" name="chieucao"><br><br>
      <input type="submit" value="Tinh" name="Submit">
    </form>
    <?php
        if(isset($_GET['Submit']) && ($_GET['Submit']=="Tinh") ) {
            $dai = (float) $_GET['chieudai'];
            $rong = (float) $_GET['chieurong'];
            $cao = (float) $_GET['chieucao'];
            $hinh = new HinhLapPhuong($dai,$rong,$cao);
            echo "Diên tich:". $hinh->tinhDienTich(). "<br>";
            echo "Thể tích:".$hinh->tinhTheTich();
        }
    ?>
    </div>
</body>
</html>