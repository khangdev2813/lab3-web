<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>BẢNG ĐIỂM</h2>
    <p> <?=$_GET['un']?></p>
    <table>
        <tr>
            <td>STT</td>
            <td>Tên riêng</td>
            <td>Điểm<main></main></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Cơ sở dữ liệu </td>
            <td>7<main></main></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Phát triển web</td>
            <td>8<main></main></td>
        </tr>
        <tr>
            <td>3</td>s
            <td>Lập trình java</td>
            <td>7.5<main></main></td>
        </tr>
    </table>
    <a href="./thongtinsinhvien.php?un=<?=$_GET['un']?>&pa=<?=$_GET['pa']?>" >Xem thông tin sinh viên</a>
</body>
</html>