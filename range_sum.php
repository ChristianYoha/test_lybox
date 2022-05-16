<?php

/**
 *
 * Function returns sum.
 *
 * @param  int   $first_index
 * @param  int   $second_index
 * @param  array $array
 * 
 * @return int
 *
 */
function sum(int $first_index, int $second_index, array $array)
{
    $sum = 0;
        $sum += $array[$first_index] + $array[$second_index];
    return $sum;
}


/**
 *
 * Function returns the sum of the integers of arr whose index 
 * belongs to the [n1; n2] interval .
 *
 * @param  array $arr
 * @param  int   $n1
 * @param  int   $n2
 * 
 * @return int
 * 
 * Errors messages: 
 * Function return -1 => "Error :  n1 is greater than lenght of array"
 * Function return -2 => "Error : n1 is greater than n2"
 */
function Calc( array $arr, int $n1, int $n2){
    if($n1 >= 0 && $n2 >= $n1){
        if($n2 < count($array)-1){
            return sum($n1, $n2, $arr);
        }else
            return "Error :  n1 is greater than lenght of array";
    }else{
        return "Error : n1 is greater than n2";
    }

}


/* For testing

$arr = [1,2,3,4,6,9];
echo Calc($arrr, 8, 6);

*/