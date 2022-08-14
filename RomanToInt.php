<?php
// Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.

// Symbol       Value
// I             1
// V             5
// X             10
// L             50
// C             100
// D             500
// M             1000

// For example, 2 is written as II in Roman numeral, just two ones added together. 12 is written as XII, which is simply X + II. The number 27 is written as XXVII, which is XX + V + II.

// Roman numerals are usually written largest to smallest from left to right. However, the numeral for four is not IIII. Instead, the number four is written as IV. Because the one is before the five we subtract it making four. The same principle applies to the number nine, which is written as IX. There are six instances where subtraction is used:

//     I can be placed before V (5) and X (10) to make 4 and 9. 
//     X can be placed before L (50) and C (100) to make 40 and 90. 
//     C can be placed before D (500) and M (1000) to make 400 and 900.

// Given a roman numeral, convert it to an integer.
function RomanToInt($s){
    $a = str_split($s);
    $total = 0;
    $nextIterator = new ArrayIterator($a);
	foreach( $a as $key => $v){
        $nextIterator->next();
        $nextKey = $nextIterator->current();
        switch ($v) {
            case "I":
                $total += 1;
                if($nextKey == "V" || $nextKey == "X"){
                 $total -=2;
                }
              break;
            case "V":
              $total += 5;
              break;
            case "X":
                $total += 10;
                if($nextKey == "L" || $nextKey == "C"){
                    $total -=20;
                }
              break;
            case "L":
                $total += 50;
                if($nextKey == "C" || $nextKey == "D"){
                    $total -=100;
                }
              break;
            case "C":
                $total += 100;
                if($nextKey == "D" || $nextKey == "M"){
                    $total -=200;
                }
              break;
            case "D":
                $total += 500;
                if($nextKey == "M"){
                    $total -=1000;
                }
              break;
            case "M":
                $total += 1000;
              break;
          }
    }
    
    return $total;
}

echo RomanToInt("CM");