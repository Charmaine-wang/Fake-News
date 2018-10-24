<?php
declare(strict_types=1);
// This is the file where you can keep all your functions. Remember to NOT
// execute/run any functions in this file. Keep it dumb.
//
// function name(int $id,array $list){
// 		foreach ($list as $id ) {
// 			if ($id === $list) {
//
// 				// code...
// 			}
// 		}
// 	return $id;
// }
function date_sort($a, $b) {
    return strtotime($a) - strtotime($b);

}
usort($arr, "date_sort");
print_r($arr);

// function getStringsLength(array $strings):array
// {
  // $stringslength = [];
  // foreach ($strings as $string) {
    // $stringslength[] = strlen($string);

  // }
  // return $stringslength;
