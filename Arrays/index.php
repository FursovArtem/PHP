<?PHP

$title = 'Arrays';

$array0 = [];
$array1 = array(3, 5, 8, 13, 21);
$array2 = [34, 55, 89, 144];
$array2d = 
[
	[0, 1, 1],
	[2, 3, 5, 8],
	[13, 21]
];

$distance['Mercury'] = 46000000;
$distance['Venus'] = 108000000;
$distance['Earth'] = 149000000;

//1
$range = range(0, 100);
shuffle($range);
$arr_1 = array_slice($range, 0, 5);

//2
$arr_2 = array();
for($i = 0; $i < 10; $i++) $arr_2[$i] = rand(25, 30);

//3
$arr_3 = array();
for($i = 0; $i < rand(1, 5); $i++)
	for($j = 0; $j < rand(1, 5); $j++)
		$arr_3[$i][$j] = rand(0, 100);

$dmin = $arr_3[0][0] ?? null;
$dmax = $arr_3[0][0] ?? null;
foreach($arr_3 as $array) {
	$dsum += array_sum($array);
	foreach($array as $value) {
		$dmin = $dmin > $value ? $value : $dmin;
		$dmax = $dmax < $value ? $value : $dmax;
	}
}

//4
$arr_4 = array();
for($i = 0; $i < 10; $i++)
	for($j = 0; $j < rand(1, 10); $j++)
		$arr_4[$i][$j] = rand(25, 30);

require 'index.view.php';