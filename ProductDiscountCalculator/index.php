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
    }
</style>
<body>
    <form method="post" action="display_discount.php">
        <input type="text" name="desc" placeholder="Nhập mô tả của sản phẩm"/>
        <input type="text" name="price" placeholder="Nhập giá niêm yết của sản phầm"/>
        <input type="text" name="percent" placeholder="Nhập Tỷ lệ chiết khấu (phần trăm)"/>
        <input type="submit" value="Tính chiết khấu"/>
    </form>
</body>
</html>