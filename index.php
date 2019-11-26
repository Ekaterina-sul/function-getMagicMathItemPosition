<?php 
function getMagicMathItemPosition($n, $k)
{
	//Формируем исходный массив
	$arr = range(1,$n);
	//сортируем его как строки
	usort($arr, function ($a, $b) {return strcmp($a, $b);});
	//print_r($arr);
	//Находим позицию искомого значения
	return array_search($k,$arr)+1;
}
echo(getMagicMathItemPosition(677,78));
?>