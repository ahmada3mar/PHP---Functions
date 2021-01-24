<?php 
// ----------------------------------------------Task 1 -------------------------------------------------
// function task1($n)
// {
//     if($n ==0)
//     {
//         return 1;
//     }
//     else
//     {
//         return $n * task1($n-1);
//         //or loop from $n to 1 and calculate the factorial.
//     }
// }


// ----------------------------------------------Task 2 -------------------------------------------------

// function task2($n)
// {
//  for($i=2; $i<$n; $i++)
//    {
//       if($n % $i ==0)
// 	      {
//             echo "Not Prime";
//            return 0;
// 		  }
//     }
//     echo "Prime";
//    }

// ----------------------------------------------Task 3 -------------------------------------------------

// function task3($str)
// {
//     for ($i=0; $i < strlen($str)/2; $i++) {
//         $r= $str[$i];
//         $l= $str[strlen($str)-$i-1];
//         $str[$i]=$l;
//         $str[strlen($str)-$i-1]=$r;
// //        echo "l :$l <br>r :$r <br>str :$str <br>";
//     }
//     var_dump($str);
// }
// ----------------------------------------------Task 4 -------------------------------------------------

// function task4($str)
// {
//     $stringParts = str_split($str);
//     sort($stringParts);
//     echo implode($stringParts);
// }
// ----------------------------------------------Task 5 -------------------------------------------------

// function task5($str)
// {
//     $strlower = strtolower($str);
//     if ($str===$strlower){
//         echo "is lower case";
//     }else{
//         echo "is not lower case";
//     }
// }
// ----------------------------------------------Task 6 -------------------------------------------------

// function task6($str)
// {
//     for ($i=0; $i < strlen($str)/2; $i++) {
//         $r= $str[$i];
//         $l= $str[strlen($str)-$i-1];
//         if ($r===$l){
//             continue;
//         }
//         else{
//             echo "string is not a palindrome";
//             return 0;
//         }
//     }
//     echo "string is a palindrome";

// }
// ----------------------------------------------Task 7 -------------------------------------------------

// function task7 ($arr,$n){
//     for ($i=0; $i < count($arr)-2; $i++) {
//         if ($arr[$i]+$arr[$i + 1]+$arr[$i + 2] == $n)
//         echo $arr[$i] ."|". $arr[$i + 1] ."|". $arr[$i + 2]."<br>";
//     }
// }
// task7 (array(2, 7, 7, 1, 8, 2, 7, 8, 7), 16);

?>