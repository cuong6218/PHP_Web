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
        <input type="submit" value="Number To String"/>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $number = $_POST["number"];
            if ($number == 0){
                echo "zero";
            } else if ($number > 0 && $number < 10){
                calcOne($number);
            } else if ($number >= 10 && $number < 20){
                calcTeen($number);
            } else if($number >= 20 && $number < 100){
                $ten = $number[0];
                $one = $number[1];
                calcTen($ten);
                calcOne($one);
            } else if($number >=100 && $number < 1000){
                $hundred = $number[0];
                $ten = $number[1];
                $one = $number[2];
                if($number == 100){
                    calcHundred($hundred);
                } else if($ten == 1){
                    calcHundred($hundred);
                    echo "and ";
                    calcTeen($ten."".$one);
                } else {
                    calcHundred($hundred);
                    echo "and ";
                    calcTen($ten);
                    calcOne($one);
                }
            }
        }
        function calcHundred($hundred){
            calcOne($hundred);
            echo " hundred ";
        }
        function calcTeen($teen){
            switch($teen){
                case(10):
                    echo "ten";
                break;
                case(11):
                    echo "eleven";
                break;
                case(12):
                    echo "twelve";
                break;
                case(13):
                    echo "thirteen";
                break;
                case(14):
                    echo "forteen";
                break;
                case(15):
                    echo "fifteen";
                break;
                case(16):
                    echo "sixteen";
                break;
                case(17):
                    echo "seventeen";
                break;
                case(18):
                    echo "eighteen";
                break;
                case(19):
                    echo "nineteen";
                break;
            }
        }

        function calcOne($one){
            switch($one){
                case (1):
                    echo "one";
                break;
                case (2):
                    echo "two";
                break;
                case (3):
                    echo "three";
                break;
                case (4):
                    echo "four";
                break;
                case (5):
                    echo "five";
                break;
                case (6):
                    echo "six";
                break;
                case (7):
                    echo "seven";
                break;
                case (8):
                    echo "eight";
                break;
                case (9):
                    echo "nine";
                break;
            }
        }

        function calcTen($ten){
            switch($ten){
                case(2):
                    echo "twenty ";
                break;
                case(3):
                    echo "thirty ";
                break;
                case(4):
                    echo "forty ";
                break;
                case(5):
                    echo "fifty ";
                break;
                case(6):
                    echo "sixty ";
                break;
                case(7):
                    echo "seventy ";
                break;
                case(8):
                    echo "eighty ";
                break;
                case(9):
                    echo "ninety ";
                break;
            }
        }

    ?>
</body>
</html>