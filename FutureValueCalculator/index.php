<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    input[type="text"]{
        width: 300px;
        margin-top: 10px;
        margin-bottom:10px;
    }
</style>
<body>
    <h1>Tính giá trị tương lai với các khoản tiền đầu tư</h1><br/>
    <form method="post">
        <input type="text" name="invent" placeholder="Nhập lượng tiền đầu tư ban đầu"/><br/>
        <input type="text" name="rate" placeholder="Nhập lãi suất năm"/><br/>
        <input type="text" name="years" placeholder="Nhập số năm đầu tư"/><br/>
        <input type="submit" value="Calculator"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $invent = htmlspecialchars($_REQUEST['invent']);
            $rate = htmlspecialchars($_REQUEST['rate']);
            $years = htmlspecialchars($_REQUEST['years']);
        }
        $result = 0;
        for ($i = 1; $i <= $years; $i++){
            $result = $invent + ($invent * $rate);
            $invent = $result;
        }
        echo "<br/>Kết quả là: ".$invent;
    ?>
</body>
</html>