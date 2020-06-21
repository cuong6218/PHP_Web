<?php
    function checkPrime($number){
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
    function printPrime($n){
        $i = 1;
        while ($i < $n){
            if (checkPrime($i)){
                echo ($i." ");
            }
            $i++; 
        }
    }
    printPrime(100);
    