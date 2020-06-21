<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $desc = htmlspecialchars($_POST['desc']);
        $price = htmlspecialchars($_POST['price']);
        $percent = htmlspecialchars($_POST['percent']);
    }
    $discount = $price * $percent * 0.01;
    $price1 = $price - $discount;
    echo "Mô tả của sản phẩm: " .$desc. "<br/>Giá niêm yết của sản phẩm: " .$price.
    "<br/>Tỷ lệ chiết khấu: " .$percent. "<br/>Lượng chiết khấu: " .$discount. 
    "<br/>Giá sau khi đã được chiết khấu: " .$price1;