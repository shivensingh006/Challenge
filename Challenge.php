<?php
/*Write a program that prints all the numbers from 1 to 100. However, for

multiples of 3, instead of the number, print "Linio". For multiples of 5 print

"IT". For numbers which are multiples of both 3 and 5, print "Linianos".*/

class prints_numbers{
	public static function get_numbers($array, $start, $end){
		$number = range($start,$end);
		$result = array_map(function($num) use ($array){
			$keys = array_keys($array);
			foreach($keys as $value){
				if($num % $value == 0){
					$num = $array[$value];
					break;
				}
			}
			return $num;
		}, $number);
		
		return $result;
	}
}

$array = array(15=>"Linianos", 3=>"Linio", 5=>"IT");
$start = 1;
$end = 100;
$result = prints_numbers::get_numbers($array, $start, $end); 


echo "<pre>";
print_r($result);
?>
