<?php
    function checkPrime($number){
        $flag = true;
        if ($number < 2){
            $flag = false;
            return $flag;
        }
        if ($number == 2){
            $flag = true;
            return $flag;
        }
        for ($i = 2; $i < $number; $i++){
            if ($number % $i ==0){
                $flag = false;
                return $flag;
            }
        } return $flag;
    }
    function printPrime($n){
        // $count = 0;
        $i = 1;
        while ($i < $n){
            if (checkPrime($i)){
                echo ($i." ");
            }
            $i++; 
        }
    }
    printPrime(100);
    