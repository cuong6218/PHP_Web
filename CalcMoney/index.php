<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="usd" placeholder="Nhập giá trị tiền USD"/>
        <input type="text" name="rate" placeholder="Nhập tỷ giá"/>
        <input type="submit" value="Chuyển đổi"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $usd = $_POST['usd'];
            $rate = $_POST['rate'];
            $vnd = $usd * $rate;
            echo "<br/>Giá trị VND là: ".$vnd." đồng";
        }
    ?>
</body>
</html>