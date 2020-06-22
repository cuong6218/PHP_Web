<?php
    $num1 = 4;
    $num2 = 1;
    while ($num1>=0 && $num2<=5){
    for ($space1=1;$space1<=$num1;$space1++){
    echo "&nbsp&nbsp";
    }
    for ($star1 = 1;$star1<=$num2;$star1++){
    echo '*';
    }
    echo "<br/>";
    $num1--;
    $num2++;
    }