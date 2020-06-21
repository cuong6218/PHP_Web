<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="number"/>
        <input type="submit" value="Print Prime"/>
    </form>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $number = htmlspecialchars($_POST['number']);
        }
        function checkSNT($number){
            if ($number < 2){
                return false;
            }
            if ($number == 2){
                return true;
            }
            for ($i = 2; $i < $number; $i++){
                if ($number % $i ==0){
                    return false;
                }
            } return true;
        }
        function printSNT($n){
            $count = 0;
            $i = 2;
            echo "<br/>Dãy số nguyên tố là:<br/>";
            while ($count < $n){
                if (checkSNT($i)){
                    echo $i." ";
                    $count++;
                }
                $i++; 
            }
        }
        printSNT($number);
    ?>
</body>
</html>