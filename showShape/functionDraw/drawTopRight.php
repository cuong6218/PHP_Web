<?php    
    $num3 = 5;
    $num4 = 0;
    while ($num3>=0 && $num4<=4){
    for ($space2 = 1; $space2<=$num4;$space2++){
        echo '&nbsp&nbsp';
    }        
    for ($star2=1;$star2<=$num3;$star2++){
        echo "*";
    }
        echo "<br/>";
        $num3--;
        $num4++;   
    }