<?php 
function getMagicMathItemPosition($n, $k)
{
	//��������� �������� ������
	$arr = range(1,$n);
	//��������� ��� ��� ������
	usort($arr, function ($a, $b) {return strcmp($a, $b);});
	//print_r($arr);
	//������� ������� �������� ��������
	return array_search($k,$arr)+1;
}
echo(getMagicMathItemPosition(677,78));
?>